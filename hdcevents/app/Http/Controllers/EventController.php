<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Http\Controllers\save;
class EventController extends Controller
{
   public function index(){
    $participante = 1;
    $events = Event::all();

    return view('welcome', compact('events', 'participante'));
   }

   public function store(Request $request){
        $events = new Event();
          
        $events['title'] = $request['title'];
        $events['city'] = $request['city'];
        $events['private'] = $request['private'];
        $events['description'] = $request['description'];
        $events -> save();
        return redirect('/');
   }


   public function create(){

    // DB::table('events')->insert([
    //     'title' => 'Evento teste',
    //     'description' => 'alguma descrição',
    //     'city' => 'Floripa',
    //     'private' => 0,
    // ]);
    // DB::table('events')->insert([
    //     'title' => 'Evento de JavaScript',
    //     'description' => 'aprender muito JS',
    //     'city' => 'São paulo',
    //     'private' => 0,
    // ]);
    // DB::table('events')->insert([
    //     'title' => 'Evento PHP',
    //     'description' => 'Aprender PHP',
    //     'city' => 'São José',
    //     'private' => 0,
    // ]);



     return view('events.create');
    }

   public function contato(){
    return view('contato');
   }



}

