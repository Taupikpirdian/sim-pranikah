<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        // store
        $contact = new Kontak;
        $contact->name     		= Input::get('name');
        $contact->email      	= Input::get('email');
        $contact->subject      	= Input::get('subject');
        $contact->phone      	= Input::get('phone');
        $contact->message      	= Input::get('message');
        $contact->save();
        // redirect
        return Redirect::back()->withErrors(['Pesan anda berhasil dikirim', 'The Message']);
    }
}
