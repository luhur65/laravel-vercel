<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function sendDoa(Request $request)
    {
        $data = [
            "nama" => $request->nama,
            "email" => $request->email,
            "doa" => $request->doa,
        ];

        Mail::to($request->email)
            ->cc("dharmabaktisitumorang@gmail.com")
            ->send(new SendEmail($data));

        // Set flash message
        return redirect('contact')->with('success', 'Doa berhasil dikirim!');
    }
}
