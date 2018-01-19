<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\Debugbar\Facade as Debugbar;

class ContactController extends Controller
{
    public function index(){
        return view ('contact/contact');
    }

    public function sendcontact(Request $request){
        $nom = $request->input('nom');
        Debugbar::info($request);
        Debugbar::addMessage($nom);
        return view ('contact/contact');
    }
}
