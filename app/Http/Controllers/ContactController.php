<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller{
    public function show()
    {
        return view('welcome');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

//        Mail::raw('It works!', function ($message){
//            $message->to(request('email'))
//                ->subject('Hello!');
//        });

        Mail::to(request('email'))
            ->send(new ContactMe());


        return redirect('/')
            ->with('message', 'Email enviado!');
    }
}
