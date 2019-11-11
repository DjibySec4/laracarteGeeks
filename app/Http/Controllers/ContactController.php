<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // cette methode crée un contact
    public function create()
    {
        return view("Contact/create");
    }
}
