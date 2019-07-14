<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suratlamaran;
use Mail;
use Session;
use App\Mail\SendEmail;
class EmailTestDiterimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hasiltest.sendmail_terima');

    }
    public function sendmail(Request $request){

        $this->validate($request,[
            "email" =>  "required",
            "subject"   =>  "required",
            "message"   =>  "required"
        ]);

        $email      =   $request->email;
        $subject    =   $request->subject;
        $message    =   $request->message;

        Mail::to($email)->send(new SendEmail($subject,$message));
        Session::flash("success");
        return back();
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
        $data = Suratlamaran::findOrFail($id);
        return view('hasiltest.sendmail_terima',compact('data'));
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
