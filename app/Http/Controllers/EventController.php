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
            $requestImage = $request->image;
            $extension = $requestImage -> extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; //o nome do arquivo que vai ser colocado no banco de dados, em formato hash (função md5)
            $requestImage -> move(public_path('img/events'), $imageName); //imagem vai ser salvada dentro da pasta img/events
            $event->image = $imageName; //esse dado que vai salvar a imagem no banco de dados
        }

        $event->save();

        //Redirecionar pra página principal depois de terminar de fazer tudo
        return redirect('/')->with('msg', 'Evento criado com sucesso!'); // <- esse "with" são as flash messages
    }


    public function show($id){
        $event = Event::findOrFail($id);

        return view('events/show', ['event' => $event]);
    }
}
