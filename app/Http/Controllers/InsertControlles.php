<?php

namespace App\Http\Controllers;
use App\Models\blog\TablesBlog_comentario;
use Illuminate\Http\Request;

class InsertControlles extends Controller
{
    public function store(Request $request, $idPostagem){

        $insert = new TablesBlog_comentario();

        $comentarios = strtolower($request->comentario);

        $insert->id_postagem = $idPostagem;
        $insert->nome = $request->nome;
        $insert->departamento = $request->departamento;
        $insert->empresa = $request->empresa;
        $insert->comentario = helper_palavroes($comentarios);
        $insert->data = date('Y-m-d');

        $insert->save();

        return back()->with(['mensagem_sucesso' => true]);

    }
}
