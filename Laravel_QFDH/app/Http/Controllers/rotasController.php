<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rotasController extends Controller
{
    public function home(){

        return view('home');
    }

    public function perguntas(){

        return view('perguntas');
    }

    public function contato(){

        return view('contato');
    }

    //////////////////////tete para campo search//////////////////////////
    // public function query(Request $request){
    //     $dados = $request->dados;

    //     $data= DB::table('products')->join('products.product_id')
    //     ->where()
    // }

    // public function search(Request $request){
    //     searchData = $request->searchData;
    //////////////////////tete para campo search//////////////////////////
}
