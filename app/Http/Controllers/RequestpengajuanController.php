<?php

namespace App\Http\Controllers;

use App\Requestpengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
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
        $requestpengajuan_show = Requestpengajuan::all();
        return view('requestpengajuan.index',['requestpengajuan_show'=>$requestpengajuan_show]);
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
        
        $postRequest = new\App\Requestpengajuan();
        $postRequest->divisi    =   $request->divisi;
        $postRequest->sebab_pengajuan   =   $request->sebab_pengajuan;
        $postRequest->jumlah    =   $request->jumlah;
        $postRequest->pembukaan_rek =   $request->pembukaan_rek;
        $postRequest->penutupan_rek =   $request->penutupan_rek;
        $postRequest->pihak_bertanggungjwb =   $request->pihak_bertanggungjwb;
        $postRequest->save();
        return redirect('requestpengajuan');
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
    public function edit($id)
    {
        $getRequest = Requestpengajuan::find($id);
        return view('requestpengajuan.edit',['getRequest'=>$getRequest]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requestpengajuan  $requestpengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateRequest  = Requestpengajuan::find($id);
        $updateRequest->divisi    =   $request->divisi;
        $updateRequest->sebab_pengajuan   =   $request->sebab_pengajuan;
        $updateRequest->jumlah    =   $request->jumlah;
        $updateRequest->pembukaan_rek =   $request->pembukaan_rek;
        $updateRequest->penutupan_rek =   $request->penutupan_rek;
        $updateRequest->pihak_bertanggungjwb =   $request->pihak_bertanggungjwb;
        $updateRequest->save();
        return redirect('requestpengajuan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requestpengajuan  $requestpengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteRequest = Requestpengajuan::find($id);
        $deleteRequest->delete();
        return redirect()->route('requestpengajuan.index');
    }
}
