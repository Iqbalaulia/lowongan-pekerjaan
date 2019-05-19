<?php

namespace App\Http\Controllers;

use App\Hasiltest;
use Illuminate\Http\Request;

class HasiltestController extends Controller
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
        return view('hasiltest.index');
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
     * @param  \App\Hasiltest  $hasiltest
     * @return \Illuminate\Http\Response
     */
    public function show(Hasiltest $hasiltest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hasiltest  $hasiltest
     * @return \Illuminate\Http\Response
     */
    public function edit(Hasiltest $hasiltest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hasiltest  $hasiltest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hasiltest $hasiltest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hasiltest  $hasiltest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hasiltest $hasiltest)
    {
        //
    }
}
