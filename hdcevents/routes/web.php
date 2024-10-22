<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\events;
//para cada view é preciso passar os dados que queira receber

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contato', [EventController::class,  'contato']);

Route::get('/produtos',[EventController::class, 'produtos']);

Route::get('produto/{id?}', [EventController::class, 'produto']);



/*Route::get('/produtos', function(){
 $busca = request('search');
    return view('produtos', compact('busca'));
});*/


/*Route::get('/produto/{id?}', function($id = null){
    return view('produto', compact('id'));
});*/



