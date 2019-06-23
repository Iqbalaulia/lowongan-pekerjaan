<?php

namespace App\Http\Controllers;

use App\PersetujuanPengajuan;
use Illuminate\Http\Request;
use App\Requestpengajuan;

class PersetujuanPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Requestpengajuan::latest()->paginate(5);
        return view('persetujuan_pengajuan.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\PersetujuanPengajuan  $persetujuanPengajuan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Requestpengajuan::findOrFail($id);
        return view('persetujuan_pengajuan.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersetujuanPengajuan  $persetujuanPengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(PersetujuanPengajuan $persetujuanPengajuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersetujuanPengajuan  $persetujuanPengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersetujuanPengajuan $persetujuanPengajuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersetujuanPengajuan  $persetujuanPengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersetujuanPengajuan $persetujuanPengajuan)
    {
        //
    }
}
