<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function index() {
        $nome = "Gleisson";
        $idade = 21;

        $arr = [30, 12, 100, 41, 50];
        $nomes = ['gleisson', 'Maria', 'João', 'Leonardo'];

        return view('welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'profissao' => "profissao",
                'arr' => $arr,
                'nomes' => $nomes
            ]
        );
    }

    public function create() {
        return view('events.create');
    }

    public function contact() {
        return view('contact');
    }

    public function produtos() {
        $busca = request('search');

        return view('products', ['busca' => $busca]);
    }

    public function produto($id = null) {
        return view('product', ['id' => $id]);
    }
}
