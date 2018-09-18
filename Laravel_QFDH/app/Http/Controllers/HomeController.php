<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    //modificado por Andrés Alzueta em 26/08
    //public function index()
    //{
    //    return view('home');
    //}

    public function index()
    {
        // $request->user()->authorizeRoles(['admin', 'manager', 'user', 'customer']);
        return view('home');
    }    
}