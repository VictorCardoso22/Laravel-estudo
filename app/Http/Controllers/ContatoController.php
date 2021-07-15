<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
           (object)["nome"=>"maria", "tel"=>"189098"],
           (object)["nome"=>"João", "tel"=>"897234"],
        ];

        $contato = new Contato();
        dd($contato->lista());

        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        dd($req['Nome']);
        return "Esse é o CRIAR do ContatoController";
    }

    public function editar()
    {
        return "Esse é o EDITAR do ContatoController";
    }
}
