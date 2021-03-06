<?php

namespace App\Http\Controllers;

use App\Hasiltest;
use Illuminate\Http\Request;
use App\Suratlamaran;
use App\BackupPelamar;
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
        $data = Suratlamaran::latest()->paginate(5);
        return view('hasiltest.index', compact('data','backup'))
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
    public function show($id)
    {
        $data = Suratlamaran::findOrFail($id);
        return view('hasiltest.show',compact('data'));
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
    public function update(Request $request, $id)
    {
        $form_data = array(
            'status_test_dua'    =>  $request->status_test_dua
        );
        // dd($form_data);
        BackupPelamar::whereId($id)->update($form_data);
        Suratlamaran::whereId($id)->update($form_data);
        return redirect('hasil-test')->with('success','Data berhasil ditambahkan');
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
    public function mailHomeTolak(Request $request){
        return view('hasiltest.sendmail_tolak');
    }

    public function mailHomeTerima(Request $request){
        return view('hasiltest.sendmail_terima');
    }
}
