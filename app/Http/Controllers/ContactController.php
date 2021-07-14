<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact');
    }

    public function store() {
        $data = request()->validate([
            "fistName" => "required",
            "lastName" => "required",
            "email" => "required|email",
            "message" => "required",
        ]);
       
        Mail::to('test@test.com')->send(new ContactMail());

        return view('pages.home');
    }
}
