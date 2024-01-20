<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //função da rota principal da aplicação
    public function index(){
        $nome = 'Luiz';
        $idade = 21;

        $nomes = ['Matheus', 'Maria', 'João', 'Pedro'];

        return view('welcome', ['nome' => $nome, 'idade' => $idade, 'nomes' => $nomes]);
    }

    public function create(){

        return view('events.create');
    }
}
