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
        $data = Requestpengajuan::latest()->paginate(5);
        return view('requestpengajuan.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
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
       
        $request->validate([
            'image'     => 'required|image|max:2048',
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
        $image->move(public_path('images'), $new_name);

        $form_data = array(
            'image'                 => $new_name,
            'divisi'                => $request->divisi,
            'sebab_pengajuan'       => $request->sebab_pengajuan,
            'jumlah'                => $request->jumlah,
            'pembukaan_rek'         => $request->pembukaan_rek,
            'penutupan_rek'         => $request->penutupan_rek,
            'gaji'                  => $request->gaji,
            'pihak_bertanggungjwb'  => $request->pihak_bertanggungjwb
        );

        Requestpengajuan::create($form_data);
        return redirect('requestpengajuan')->with('success','Data berhasil ditambahkan');
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
        $data = Requestpengajuan::findOrFail($id);
        return view('requestpengajuan.edit', compact('data'));

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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        
        $form_data = array(
            'image'                 => $image_name,
            'divisi'                => $request->divisi,
            'sebab_pengajuan'       => $request->sebab_pengajuan,
            'jumlah'                => $request->jumlah,
            'pembukaan_rek'         => $request->pembukaan_rek,
            'penutupan_rek'         => $request->penutupan_rek,
            'pihak_bertanggungjwb'  => $request->pihak_bertanggungjwb
        );
        Requestpengajuan::whereId($id)->update($form_data);
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
        $data = Requestpengajuan::findOrFail($id);
        $data->delete();
        return redirect()->route('requestpengajuan.index');
    }
}
