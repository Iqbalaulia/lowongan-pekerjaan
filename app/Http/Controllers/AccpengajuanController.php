<?php

namespace App\Http\Controllers;

use App\Accpengajuan;
use Illuminate\Http\Request;

class AccpengajuanController extends Controller
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
        return view('accpengajuan.index');
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
     * @param  \App\Accpengajuan  $accpengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(Accpengajuan $accpengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accpengajuan  $accpengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Accpengajuan $accpengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accpengajuan  $accpengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accpengajuan $accpengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accpengajuan  $accpengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accpengajuan $accpengajuan)
    {
        //
    }
}
