<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    //função da rota principal da aplicação
    public function index(){
        $search = request('search'); //esse search entre aspas é por causa do input que foi nomeado de search no blade

        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get(); //esse get diz que quer 'pegar' esses registros do search
        }else{
            $events = Event::all(); //selecionar todos os dados/eventos do banco de dados
        }

        return view('welcome', ['events' => $events, 'search' => $search]);
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

    public function store(Request $request){ //$request = contém todos os dados de POST e GET (dos forms feitos no front-end)
        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->description = $request->description;
        $event->private = $request->private;
        $event->items = $request->items;

        //Image upload
        if($request->hasFile('image') ** $request->file('image') -> isValid()){
            $requestImage = $request->image;
            $extension = $requestImage -> extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension; //o nome do arquivo que vai ser colocado no banco de dados, em formato hash (função md5)
            $requestImage -> move(public_path('img/events'), $imageName); //imagem vai ser salvada dentro da pasta img/events
            $event->image = $imageName; //aqui diz que o nome da imagem que foi criada a duas linhas atras vai ser atribuida a imagem do evento
        }


        $user = auth()->user(); //função user do event.php
        $event->user_id = $user->id;


        $event->save();

        //Redirecionar pra página principal depois de terminar de fazer tudo
        return redirect('/')->with('msg', 'Evento criado com sucesso!'); // <- esse "with" são as flash messages
    }


    public function show($id){
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }
}
