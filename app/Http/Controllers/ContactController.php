<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Requests\ContactFormRequest;
use  App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use  MercurySeries\Flashy\Flashy;
use  App\Models\Message;

class ContactController extends Controller
{
    // cette methode crée un contact
    public function create()
    {
        return view("Contact/create");
    }

    // on recupere les infos saisies on les passe à a la meth send pour
    //  l'env à la destination qui est dans notre cas l'administrateur

    public function store(ContactFormRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'message'));
        
        $mailable = new ContactMessageCreated($message);
        Mail::to(config('laracarte.email_admin'))->send($mailable);
        Flashy::primary('Nous vous répondrons dans les plus bref delais !');
        return redirect(route('home'));
    }

    //ancien

    // public function store(ContactFormRequest $request)
    // {
    //     $mailable = new ContactMessageCreated($request->name, $request->email, $request->message);
    //     Mail::to(config('laracarte.email_admin'))->send($mailable);
    //     Flashy::primary('Nous vous répondrons dans les plus bref delais !');
    //     return redirect(route('home'));
    //     // return $mailable->build();
    // }
     
}
