<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use app\Models\blog\TablesBlog_Post;
use Illuminate\Support\Facades\DB;

class QueryBlog_post_recente extends Controller
{
    public function blog_recentes()
    {
        $blogPostRecentes = TablesBlog_Post::leftJoin('blog_user', 'blog_post.id_post_user', '=', 'blog_user.id_user')
            ->leftJoin('blog_comentarios', 'blog_post.id_postagem', '=', 'blog_comentarios.id_postagem')
            ->select('blog_user.exibicao AS nome', 'blog_post.*', DB::raw('COUNT(blog_comentarios.id_comentario) AS comentarios_count'))
            ->groupBy('blog_post.id_postagem', 'blog_post.id_post_user', 'blog_post.tipo_postagem', 'blog_post.tipo_arquivo', 'blog.blog_post.titulo', 'blog.blog_post.mensagem', 'blog.blog_post.file_img', 'blog.blog_post.data','blog.blog_post.data_drop','blog.blog_post.alerta_comentario','blog.blog_post.deletar','blog.blog_post.carousel','blog.blog_user.exibicao', 'blog.blog_post.curtidas', 'blog.blog_post.data_postagem')
            ->orderByDesc('blog_post.id_postagem')
            ->limit(PHP_INT_MAX) // Define um limite muito grande para garantir que todas as linhas sejam retornadas
            ->get();

        $blogPostRecentes->transform(function ($blogPostRecente) {
            $blogPostRecente->data = date('d/m/Y', strtotime($blogPostRecente->data));
            return $blogPostRecente;
        });

        return $blogPostRecentes;
    }
}

