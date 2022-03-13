<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skripsi;

class Skripsweet extends Controller
{
    public function index()
    {
        $data_skripsi = Skripsi::all();
        return view('sunan', compact('data_skripsi'));
    }
}