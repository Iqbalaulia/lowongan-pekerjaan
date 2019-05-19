<?php

namespace App\Http\Controllers;

use App\Suratlamaran;
use Illuminate\Http\Request;

class SuratlamaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('suratlamaran.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suratlamaran  $suratlamaran
     * @return \Illuminate\Http\Response
     */
    public function show(Suratlamaran $suratlamaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suratlamaran  $suratlamaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Suratlamaran $suratlamaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suratlamaran  $suratlamaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suratlamaran $suratlamaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suratlamaran  $suratlamaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suratlamaran $suratlamaran)
    {
        //
    }
}
