<?php

namespace App\Http\Controllers;

use App\Suratlamaran;
use App\BackupPelamar;
use App\File;
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
        $data = Suratlamaran::latest()->paginate(5);
        $backup = BackupPelamar::latest()->paginate(5);
        return view('suratlamaran.index', compact('data','backup'))
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
     * @param  \App\Suratlamaran  $suratlamaran
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Suratlamaran::findOrFail($id);
        return view('suratlamaran.show',compact('data'));
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
    public function update(Request $request, $id)
    {
        $form_data = array(
            'status_test_satu'    =>  $request->status_test_satu
        );
        // dd($form_data);
        BackupPelamar::whereId($id)->update($form_data);
        Suratlamaran::whereId($id)->update($form_data);
        return redirect('suratlamaran')->with('success','Data berhasil ditambahkan');
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
