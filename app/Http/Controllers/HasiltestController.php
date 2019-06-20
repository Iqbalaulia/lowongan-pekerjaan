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
        $data = Hasiltest::latest()->paginate(5);
        return view('hasiltest.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hasiltest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = array(
            'nama_pelamar'                 => $request->nama_pelamar,
            'hasil'                => $request->hasil,
            'posisi'       => $request->posisi,
           
        );

        Hasiltest::create($form_data);
        return redirect('hasil-test')->with('success','Data berhasil ditambahkan');
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
