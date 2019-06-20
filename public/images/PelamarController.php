<?php

namespace App\Http\Controllers;

use App\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use Illuminate\Support\Facades\Storage;

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
        $request->validate([
            'file'     => 'required|file|max:4048',
            'image'     => 'required|image|max:2048',
            'nama_lengkap'    => 'required',    
            'divisi_lamaran'   => 'required'      
        ]);
        
        // Pdf
        $files = $request->file('file');
        $new_name = rand() . '.' . $files->getClientOriginalExtension();
        $files->move(public_path('curiculumVitae'), $new_name);
        
        // Foto profile
        $image = $request->file('image');
        $foto_profil = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('fotoProfil'), $foto_profil);

        $form_data = array(
            'image'         =>  $foto_profil,
            'files'         =>  $new_name,
            'nama_lengkap'  =>  $request->nama_lengkap,
            'keahlian'      =>  $request->keahlian,
            'linkedin'      =>  $request->linkedin,
            'github'        =>  $request->github,
            'gitlab'        =>  $request->gitlab,
            'divisi_lamaran'=>  $request->divisi_lamaran
        );

        Pelamar::create($form_data);
        return view('pelamar.create');
       
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
