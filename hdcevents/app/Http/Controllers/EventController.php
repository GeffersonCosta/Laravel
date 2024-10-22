<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
   public function index(){
    $nome = "Gefferson";
    $arr = [1,2,3,4,7,8,9];
    return view('welcome', compact('nome', 'arr'));
    //return view('welcome', ['nome' => $nome]);
   }


   public function create(){
     return view('events.create');
   }

   public function contato(){
    return view('contato');
   }

   public function produtos(){
    $busca = request('search');
    return view('produtos', compact('busca'));
   }

   public function produto($id){
    return view('produto', compact('id'));
   }

}

