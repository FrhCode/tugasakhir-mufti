<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disease;
use App\Models\Symptom;
use App\Models\Knowledge;

class PagesController extends Controller
{
    public function index () {
        $data_penyakit = Disease::all();
        $data_gejala = Symptom::all();
        $data_pengetahuan = Knowledge::all();
        return view('pages.index', compact('data_penyakit', 'data_gejala', 'data_pengetahuan'));
    }

    public function tentang() {
        return view('pages.tentang');
    }
}
