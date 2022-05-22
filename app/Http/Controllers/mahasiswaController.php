<?php

namespace App\Http\Controllers;

use App\Models\studen;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('inputmahasiswa', ['title' => 'Form-Mahasiswa']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        # memasukan data ke database
        $studen = new studen;
        $studen->nama = $request->nama;
        $studen->email = $request->email;
        $studen->npm = $request->npm;
        $studen->alamat = $request->alamat;
        $studen->kelas = $request->kelas;
        $studen->nama_orang_tua = $request->nama_orang_tua;
        $studen->perkerjaan_orang_tua = $request->perkerjaan_orang_tua;
        $studen->tempat_tinggal = $request->tempat_tinggal;
        $studen->no_telp = $request->no_telp;
        $studen->goldar = $request->goldar;
        $studen->save();
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
     * @param  \App\Models\studen  $studen
     * @return \Illuminate\Http\Response
     */
    public function show(studen $studen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studen  $studen
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, studen $studen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studen  $studen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, studen $studen)
    {
        //mengupdate data studen
        $nama = $request->nama;
        $email = $request->email;
        $npm = $request->npm;
        $alamat = $request->alamat;
        $kelas = $request->kelas;
        $nama_orang_tua = $request->nama_orang_tua;
        $perkerjaan_orang_tua = $request->perkerjaan_orang_tua;
        $tempat_tinggal = $request->tempat_tinggal;
        $no_telp = $request->no_telp;
        $goldar = $request->goldar;

        $studen->nama = $nama;
        $studen->email = $email;
        $studen->npm = $npm;
        $studen->alamat = $alamat;
        $studen->kelas = $kelas;
        $studen->nama_orang_tua = $nama_orang_tua;
        $studen->perkerjaan_orang_tua = $perkerjaan_orang_tua;
        $studen->tempat_tinggal = $tempat_tinggal;
        $studen->no_telp = $no_telp;
        $studen->goldar = $goldar;
        $studen->save();
        return redirect('/tabel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studen  $studen
     * @return \Illuminate\Http\Response
     */
    public function destroy(studen $studen)
    {
        //
    }
    public function delete(Request $request, studen $id)
    {
        //membuat pemilihan apakah mau menghapus atau tidak
        $id->delete();
        return redirect('/tabel')->with('success', 'Data Berhasil Dihapus');
    }
}
