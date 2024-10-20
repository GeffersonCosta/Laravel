<?php

use Illuminate\Support\Facades\Route;
//para cada view é preciso passar os dados que queira receber
Route::get('/', function () {
    $nome = "Gefferson";
    $arr = [1,2,3,4,7,8,9];
    return view('welcome', compact('nome', 'arr'));
    //return view('welcome', ['nome' => $nome]);
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/produtos', function(){

    $busca = request('search');
    return view('produtos', compact('busca'));
});


Route::get('/produto/{id?}', function($id = null){
    return view('produto', compact('id'));
});

//Route::fallback('')
