<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knowledge;
use App\Models\Disease;
use App\Models\Symptom;

class KnowledgesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pengetahuan = Knowledge::all();
        return view('pengetahuan.index', compact('data_pengetahuan'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_penyakit = Disease::all();
        $data_gejala = Symptom::all();
        return view('pengetahuan.add', compact('data_penyakit', 'data_gejala'));
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
            'disease_id' => 'required',
            'symptom_id' => 'required',
            'mb' => 'required|gt:md',
            'md' => 'required'
        ]);

        Knowledge::create($request->all());
        return redirect('/admin/pengetahuan')->with('success', 'Pengetahuan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data_pengetahuan = Knowledge::all();
        $data_penyakit = Disease::all();
        return view('pengetahuan.show', compact('data_pengetahuan', 'data_penyakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_penyakit = Disease::all();
        $data_gejala = Symptom::all();
        $pengetahuan = Knowledge::find($id);
        if ($pengetahuan) {
            return view('pengetahuan.edit', compact('pengetahuan', 'data_penyakit', 'data_gejala'));
        }

        return redirect('/admin/pengetahuan')->with('error', 'ID not found');
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
            'disease_id' => 'required',
            'symptom_id' => 'required',
            'mb' => 'required|gt:md',
            'md' => 'required'
        ]);

        $pengetahuan = Knowledge::find($id);
        if ($pengetahuan) {
            $pengetahuan->update($request->all());
            return redirect('/admin/pengetahuan')->with('success', 'Pengetahuan berhasil diupdate');
        }

        return redirect('/admin/pengetahuan')->with('error', 'ID not found');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengetahuan = Knowledge::find($id);
        if ($pengetahuan) {
            $pengetahuan->delete();
            return redirect('/admin/pengetahuan')->with('success', 'Pengetahuan berhasil dihapus');
        }

        return redirect('/admin/pengetahuan')->with('error', 'ID not found');
    }
}
