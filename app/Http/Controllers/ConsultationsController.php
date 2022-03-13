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

    public function calculate(Request $request)
    {
        // // Check if page has refreshed, then redirect
        // if ($request->session()->has('page_reload')) {
        //     return redirect('/konsultasi');
        // }
        // Store CF expert * CF User
        $hasilkali = [];
        $gejala_pasien = $request->except('_token');
        $data_pengetahuan = Knowledge::all();

        // Very IMPORTANT to guard 2 decimal places for numbers
        function roundOutNumber($number)
        {
            $rounded = number_format(floatval($number), 3, '.', '');
            return $rounded;
        }

        function calculateCfMultiplier($mb, $md, $user_cf)
        {
            return (roundOutNumber($mb) - roundOutNumber($md)) * roundOutNumber($user_cf);
        }

        function calculateCfCombine($old, $new)
        {
            if ($old > 0.00 &&  $new > 0.00) {
                // (CF1+CF2) – (CF1 * CF2)
                return (roundOutNumber($old) + roundOutNumber($new)) - (roundOutNumber($old) * roundOutNumber($new));
            } else if ($old < 0.00 &&  $new < 0.00) {
                //  (CF1+CF2) + (CF1 * CF2)
                return (roundOutNumber($old) + roundOutNumber($new)) + (roundOutNumber($old) * roundOutNumber($new));
            } else if ($old < 0.00 || $new < 0.00) {
                //  (CF1 + CF2) / ( 1 - min(CF1 | CF2) )
                return (roundOutNumber($old) + roundOutNumber($new)) / (1 - min(abs(roundOutNumber($old)), abs(roundOutNumber($new))));
            } else {
                return 0.00;
            }
        }

        function convertToPercent($num)
        {
            return roundOutNumber(roundOutNumber($num) * 100.00);
        }

        // Create a list of CF expert * CF User
        foreach ($data_pengetahuan as $pengetahuan) {
            foreach ($gejala_pasien as $key => $value) {
                // Value Not Empty & It's a match!
                if ($value != 0.00 && $pengetahuan->symptom_id == $key) {
                    $hasilkali[$pengetahuan->disease_id]['id'] = $pengetahuan->disease_id;
                    $hasilkali[$pengetahuan->disease_id]['name'] = $pengetahuan->diseases->name;
                    $hasilkali[$pengetahuan->disease_id]['gejala'][$pengetahuan->symptom_id] = roundOutNumber(calculateCfMultiplier($pengetahuan->mb, $pengetahuan->md, $value));
                }
            }

            if ($hasilkali == [] || array_key_exists($pengetahuan->disease_id, $hasilkali) == false) {
                continue;
            }

            // Only taking the values from ['gejala'] to calculate CF Combine since we need the index to compare the current and the next CF values
            $hasilkali[$pengetahuan->disease_id]['cf_gejala'] = array_values($hasilkali[$pengetahuan->disease_id]['gejala']);
            $hasilkali[$pengetahuan->disease_id]['cf_combine'] = roundOutNumber(0.00);
            $hasilkali[$pengetahuan->disease_id]['cf_combine_percent'] = roundOutNumber(0.00);
        }


        if ($hasilkali != []) {
            // Calculating CF Combine && CF Combine Percent
            foreach ($hasilkali as $penyakit => $penyakit_value) {
                // Declaring count here because we dont want to call count 
                // Everytime we iterate, that would slow down the loop
                $count = count($hasilkali[$penyakit]['cf_gejala']) - 1;

                if ($count == 0) {
                    $hasilkali[$penyakit]['cf_combine'] = roundOutNumber($hasilkali[$penyakit]['cf_gejala'][0]);
                    $hasilkali[$penyakit]['cf_combine_percent'] = roundOutNumber(convertToPercent(roundOutNumber($hasilkali[$penyakit]['cf_combine'])));
                } else {
                    for ($i = 0; $i < $count; $i++) {
                        if ($hasilkali[$penyakit]['cf_combine'] == 0.00) {
                            $cf_combine = roundOutNumber(calculateCfCombine(roundOutNumber($hasilkali[$penyakit]['cf_gejala'][$i]), roundOutNumber($hasilkali[$penyakit]['cf_gejala'][$i + 1])));
                            $hasilkali[$penyakit]['cf_combine'] = roundOutNumber($cf_combine);
                        } else {
                            $cf_combine = calculateCfCombine(roundOutNumber($hasilkali[$penyakit]['cf_combine']), roundOutNumber($hasilkali[$penyakit]['cf_gejala'][$i + 1]));
                            $hasilkali[$penyakit]['cf_combine'] = roundOutNumber($cf_combine);
                        }
                    }
                    $hasilkali[$penyakit]['cf_combine_percent'] = roundOutNumber(convertToPercent(roundOutNumber($hasilkali[$penyakit]['cf_combine'])));
                }
            }

            // // I Dont know about the theory, but we could get negative values, which means the disease is
            // // not certain at all. So, rather than showing it to the User, i'm filtering it.
            // $data_hasil = array_filter($hasilkali, function ($penyakit) {
            //     return $penyakit['cf_combine_percent'] > 0;
            // });
            $data_hasil = $hasilkali;


            usort($data_hasil, function ($penyakit1, $penyakit2) {
                return (roundOutNumber($penyakit1['cf_combine_percent']) > roundOutNumber($penyakit2['cf_combine_percent'])) ? -1 : 1;
            });

            return redirect('/konsultasi/hasil')->with('data_hasil', $data_hasil);
        }
        // $hasilkali == null is empty, so initialize data_hasil as empty 
        // So we dont need to pass $hasilkali. In the view theres only $data_hasil,
        // so we only need to check if $data_hasil is null or not
        $data_hasil = null;
        return redirect('/konsultasi/hasil')->with('data_hasil', $data_hasil);
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