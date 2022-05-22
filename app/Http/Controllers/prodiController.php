<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('inputprodi', ['title' => 'Form-Prodi']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //menambahkan data
        $prodi = new prodi;
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->alamat = $request->alamat;
        $prodi->fakultas = $request->fakultas;
        $prodi->save();
        return redirect('/tabel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prodi $prodi)
    {
        //mengubah data
        $prodi->nama_prodi = $request->nama_prodi;
        $prodi->alamat = $request->alamat;
        $prodi->fakultas = $request->fakultas;
        $prodi->save();
        return redirect('/tabel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodi $prodi)
    {
        //menghapus data
        $prodi->delete();
        return redirect('/tabel');
    }
}
