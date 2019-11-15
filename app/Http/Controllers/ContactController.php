<?php

namespace App\Http\Controllers;

use  App\Models\Message;
use Illuminate\Http\Request;
use  MercurySeries\Flashy\Flashy;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use  App\Http\Requests\ContactFormRequest;

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
        // sleep(3);
        $message = Message::create($request->only('name', 'email', 'message'));
         Mail::to(config('laracarte.email_admin'))->send(new ContactMessageCreated($message));
        Flashy::primary('Nous vous répondrons dans les plus bref delais !');
        return redirect(route('home'));
    }

}
