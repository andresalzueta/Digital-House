<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rotasController extends Controller
{
    public function perguntas(){

        return view('perguntas');
    }

    public function login(){

        return view('login');
    }
}
