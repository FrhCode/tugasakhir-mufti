<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Epilepsi;

class EpilepsiController extends Controller
{
    public function index()
    {
        $dataepilepsi = Epilepsi::all();
        return view('epilepsi.index')->with('dataepilepsi', $dataepilepsi);
    }

    public function edit()
    {
        $dataepilepsi = Epilepsi::all();
        return view('epilepsi.edit')->with('dataepilepsi', $dataepilepsi);
    }

    public function create()
    {
        $dataepilepsi = Epilepsi::all();
        return view('epilepsi.create')->with('dataepilepsi', $dataepilepsi);
    }
}