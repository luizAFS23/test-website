<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function produtos($id = null){
        $busca = request('search');

        return view('products', ['id' => $id, 'busca' => $busca]); /*return view() depende de ter arquivos .blade.php na pasta views*/
    }
}
