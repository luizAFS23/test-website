<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //função da rota principal da aplicação
    public function index(){
        $events = Event::all(); //selecionar todos os dados/eventos do banco de dados

        return view('welcome', ['events' => $events]);
    }

    public function sla(){
        $nome = 'Luiz';
        $idade = 21;

        $nomes = ['Matheus', 'Maria', 'João', 'Pedro'];

        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'nomes' => $nomes]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        $event = new Event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->description = $request->description;
        $event->private = $request->private;

        //Image upload
        if($request->hasFile('image') ** $request->file('image') -> isValid()){

        }

        $event->save();

        //Redirecionar pra página principal depois de terminar de fazer tudo
        return redirect('/')->with('msg', 'Evento criado com sucesso!'); // <- esse "with" são as flash messages
    }
}
