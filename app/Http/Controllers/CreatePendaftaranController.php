<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requestpengajuan;
use App\NewPendaftaran;
class CreatePendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('')
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
            'image'     => 'required|image|max:4048',
            'divisi'    => 'required',
            'sebab_pengajuan' => 'required',      
            'jumlah'          => 'required',
            'pembukaan_rek'   => 'required',      
            'penutupan_rek'   => 'required', 
            'gaji'            => 'required',     
            'pihak_bertanggungjwb' =>'required'
        ]);
        
        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('poster'), $new_name);
        $status = "Telah dibuat";
        $form_data = array(
            'image'                 => $new_name,
            'divisi'                => $request->divisi,
            'sebab_pengajuan'       => $request->sebab_pengajuan,
            'jumlah'                => $request->jumlah,
            'pembukaan_rek'         => $request->pembukaan_rek,
            'penutupan_rek'         => $request->penutupan_rek,
            'gaji'                  => $request->gaji,
            'status'                => $status,
            'pihak_bertanggungjwb'  => $request->pihak_bertanggungjwb
        );

        NewPendaftaran::create($form_data);
        return redirect('accpengajuan')->with('success','Form Pendaftaran Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Requestpengajuan::findOrFail($id);
        return view('create_pendaftaran.create', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
