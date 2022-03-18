<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;
use App\Models\Knowledge;
use App\Models\Disease;

class ConsultationsController extends Controller
{
    public function index()
    {
        $data_gejala = Symptom::all();
        return view('konsultasi.index', compact('data_gejala'));
    }

    public function calculateCfCombine($sequential_cf) {
        $combined_cf = $sequential_cf[0];
        for ($i=0; $i<count($sequential_cf)-1; $i++) {
            if ($combined_cf > 0.00 &&  $sequential_cf[$i + 1] > 0.00) {
                // (CF1+CF2) – (CF1 * CF2)
                $combined_cf = ($combined_cf + $sequential_cf[$i + 1]) - ($combined_cf * $sequential_cf[$i + 1]);
            } else if ($combined_cf < 0.00 &&  $sequential_cf < 0.00) {
                //  (CF1+CF2) + (CF1 * CF2)
                $combined_cf = ($combined_cf + $sequential_cf[$i + 1]) + ($combined_cf * $sequential_cf[$i + 1]);
            } else if ($combined_cf < 0.00 || $sequential_cf < 0.00) {
                //  (CF1 + CF2) / ( 1 - min(CF1 | CF2) )
                $combined_cf = ($combined_cf + $sequential_cf[$i + 1]) / (1 - min($combined_cf, $sequential_cf[$i + 1]));
            } else {
                continue;
            }
        }

        return $combined_cf;
    }

    public function calculateCf(Request $request) {
        // Data input CF user
        $gejala_pasien = $request->except('_token');
        // Simpan input CF user menjadi array
        $array_gejala = array_values($gejala_pasien);
        // Ambil data gejala dari database
        $data_pengetahuan = Knowledge::all();
        // Simpan data gejala dari database menjadi array
        $array_pengetahuan = array();
        // Simpan cf sequensial (CF Pakar * CF User) menjadi array index numeric
        $cf_multiplied = array();
        // Simpan cf sekuensial menjadi array assotiative key = ID gejala (G001)
        $cf_multiplied_key = [];
        // Simpan cf kombinasi untuk setiap penyakit
        $array_penyakit = [];

        // Append CF pakar (mb - md) ke array pengetahuan
        foreach ($data_pengetahuan as $pengetahuan) {
            array_push($array_pengetahuan, ($pengetahuan->mb - $pengetahuan->md));
        }

        // Append cf sekuensial (CF Pakar * CF User)
        for ($i=0; $i<count($array_pengetahuan); $i++) {
            array_push($cf_multiplied, $array_pengetahuan[$i] * $array_gejala[$i]);
        }

        // Append cf sekuensial (CF Pakar * CF User) menjadi array assotiative dgn key = ID gejala (G001)
        for ($i=0; $i<count($cf_multiplied); $i++) {
            // Kalau i = 2 digit, maka key = G011, G012,G010
            if (strlen((string)$i + 1) > 1) {
                $cf_multiplied_key["G0" . strval($i + 1)] = $cf_multiplied[$i];
            // Kalau i = 1 digit, maka key = G001, G002, dst
            } else {
                $cf_multiplied_key["G00" . strval($i + 1)] = $cf_multiplied[$i];
            }
        }
        
        // Append cf sekuensial kedalam array penyakit (dikelompokkan berdasarkan ID penyakit)
        foreach ($data_pengetahuan as $pengetahuan) {
            if (!array_key_exists($pengetahuan->disease_id, $array_penyakit)){
                $array_penyakit[$pengetahuan->disease_id] = [];
                array_push($array_penyakit[$pengetahuan->disease_id], $cf_multiplied_key[$pengetahuan->symptom_id]);
            } else {
                array_push($array_penyakit[$pengetahuan->disease_id], $cf_multiplied_key[$pengetahuan->symptom_id]);
            }
        }

        // Hitung cf kombinasi untuk setiap array pada setiap penyakit
        foreach ($array_penyakit as $key => $value) {
            $array_penyakit[$key] = $this->calculateCfCombine($value);
            // Jika hasil cf kombinasi == 0, hapus item
            if ($array_penyakit[$key] == 0.00) {
                unset($array_penyakit[$key]);
            }
        }
        // Sort associative array DESC
        arsort($array_penyakit);

        // Ambil data penyakit dari database untuk setiap item
        foreach ($array_penyakit as $key => $value) {
            $penyakit = Disease::find($key);
            $array_penyakit[$key] = [ 'disease' => $penyakit, 'cf' => round($value * 100, 2) ];
        }

        // Diagnosis adalah penyakit dengan CF kombinasi paling besar
        $diagnosis = $array_penyakit != [] ? reset($array_penyakit) : 'Tidak ditemukan';
    
        return view('konsultasi.hasil', compact('array_penyakit', 'diagnosis'));
    }

    public function result(Request $request)
    {
        if ($request->session()->has('data_hasil')) {
            $data_hasil = session('data_hasil');
            $diagnosis = Disease::find($data_hasil[0]['id']);
            return view('konsultasi.hasil', compact('data_hasil', 'diagnosis'));
        } else if ($request->session()->exists('data_hasil')) {
            $data_hasil = session('data_hasil');
            return view('konsultasi.hasil', compact('data_hasil'));
        }

        return redirect('/konsultasi')->with('error', 'Silahkan isi gejala terlebih dahulu');
    }
}