<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratlamaran;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $count_total_lamaran = Suratlamaran::count();
        $count_total_diterima_administrasi = Suratlamaran::where('status_test_satu','=','Diterima')->count();
        $count_total_diterima_coding = Suratlamaran::where('status_test_dua','=','Diterima')->count();
        $data_diterima_kerja = Suratlamaran::where('status_test_satu','=','Diterima','AND','status_test_dua','=','Diterima')->count();
        return view('dashboard.index',
        compact('count_total_lamaran',
        'count_total_diterima_administrasi',
        'count_total_diterima_coding','data_diterima_kerja'));

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
