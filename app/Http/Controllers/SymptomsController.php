<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptom;

class SymptomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_gejala = Symptom::all();
        return view('gejala.index', compact('data_gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gejala.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id' => 'unique:symptoms|required',
            'name' => 'required',
            'info' => 'required'
        ]);

        Symptom::create($request->all());
        return redirect('/admin/gejala')->with('success', 'Gejala berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gejala = Symptom::find($id);
        if ($gejala) {
            return view('gejala.edit', compact('gejala'));
        }

        return redirect('/admin/gejala')->with('error', 'ID not found');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id' => 'required',
            'name' => 'required',
            'info' => 'required'
        ]);

        $gejala = Symptom::find($id);
        if ($gejala) {
            $gejala->update($request->all());
            return redirect('/admin/gejala')->with('success', 'Gejala berhasil diupdate');
        }

        return redirect('/admin/gejala')->with('error', 'ID not found');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gejala = Symptom::find($id);
        if ($gejala) {
            $gejala->delete();
            return redirect('/admin/gejala')->with('success', 'Gejala berhasil dihapus');
        }

        return redirect('/admin/gejala')->with('error', 'ID not found');
    }
}
