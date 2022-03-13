<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use Illuminate\Http\Request;

class DiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_penyakit = Disease::all();
        return view('penyakit.index', compact('data_penyakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penyakit.add');
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
            'id' => 'unique:diseases|required',
            'name'=> 'required',
            'info' => 'required',
            'advice' => 'required'
        ]);

        Disease::create($request->all());
        return redirect('/admin/penyakit')->with('success', 'Penyakit berhasil ditambah');
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
        $penyakit = Disease::find($id);
        if ($penyakit) {
            return view('penyakit.edit', compact('penyakit'));
        }

        return redirect('/admin/penyakit')->with('error', 'ID not found');
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
            'info' => 'required',
            'advice' => 'required'
        ]);

        $penyakit = Disease::find($id);
        if ($penyakit) {
           $penyakit->update($request->all());
           return redirect('/admin/penyakit')->with('success', 'Penyakit berhasil diupdate');
        }

        return redirect('/admin/penyakit')->with('error', 'ID not found');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penyakit = Disease::find($id);
        if ($penyakit) {
            $penyakit->delete();
            return redirect('/admin/penyakit')->with('success', 'Penyakit berhasil dihapus');
        }

        return redirect('/admin/penyakit')->with('error', 'ID not found');
    }
}
