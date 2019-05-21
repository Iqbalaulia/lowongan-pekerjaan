<?php

namespace App\Http\Controllers;

use App\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pelamar.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postPelamar = new\App\Pelamar();
        $postPelamar->nama_lengkap    =   $request->nama_lengkap;
        $postPelamar->keahlian  =   $request->keahlian;
        $postPelamar->linkedin  =   $request->linkedin;
        $postPelamar->github    =   $request->github;
        $postPelamar->gitlab    =   $request->gitlab;
        $postPelamar->divisi_lamaran    = $request->divisi_lamaran;
        $postPelamar->save();
        return redirect('pelamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function show(Pelamar $pelamar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelamar $pelamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelamar $pelamar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pelamar  $pelamar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelamar $pelamar)
    {
        //
    }
}
