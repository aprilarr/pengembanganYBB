<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;

class KontakController extends Controller
{
    function index()
    {
        return view('kontak');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'message'   => 'required'
        ]);
        $data = array(
            'name'      => $request->name,
            'message'   => $request->message
        );
        Mail::to('ybb1980@yayasanbudibaktibdg.sch.id')->send(new Sendmail($data));
        return back()->with('Sukses', 'Terima Kasih Telah Menghubungi Kami!');
    }
}