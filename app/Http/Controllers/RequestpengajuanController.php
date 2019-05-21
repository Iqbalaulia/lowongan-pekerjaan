<?php

namespace App\Http\Controllers;

use App\Requestpengajuan;
use Illuminate\Http\Request;

class RequestpengajuanController extends Controller
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
        return view('requestpengajuan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('requestpengajuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requestpengajuan  $requestpengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(Requestpengajuan $requestpengajuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requestpengajuan  $requestpengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Requestpengajuan $requestpengajuan)
    {
        return view('requestpengajuan.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requestpengajuan  $requestpengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requestpengajuan $requestpengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requestpengajuan  $requestpengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requestpengajuan $requestpengajuan)
    {
        //
    }
}
