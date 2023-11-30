<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\blog\TablesBlog_comentario;

class QueryBlog_comentario extends Controller
{
    public function blog_comentario($idPostagem){
        $blogComentario = TablesBlog_comentario::where('blog_comentarios.id_postagem', $idPostagem)
        ->orderByDesc('blog_comentarios.id_postagem')
        ->get();

        $blogComentario->transform(
            function ($blogComentario){
                $blogComentario->data = date('d/m/Y', strtotime($blogComentario->data));

                return $blogComentario;
            }
        );

        return $blogComentario;
    }
}
