<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index() {
        return view('contact');
    }

    public function sendDoa(Request $request)
    {
        $data = [
            "nama" => $request->nama,
            "doa" => $request->doa,
        ];

        Mail::to("dharmabaktisitumorang@gmail.com")->send(new SendEmail($data));

        \redirect('contact');
    }
}
