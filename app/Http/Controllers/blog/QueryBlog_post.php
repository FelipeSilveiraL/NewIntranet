<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use App\Models\blog\TablesBlog_Post;
use Illuminate\Support\Facades\DB;

class QueryBlog_post extends Controller
{
    public function blog_post($idPostagem, $home)
    {
        #QUERY DA TABELA blog_post
        $blogPost = TablesBlog_Post::leftJoin('blog_user', 'blog_post.id_post_user', '=', 'blog_user.id_user')
            ->leftJoin('blog_comentarios', 'blog_post.id_postagem', '=', 'blog_comentarios.id_postagem')
            ->select('blog_user.exibicao AS nome', 'blog_post.*', DB::raw('COUNT(blog_comentarios.id_comentario) AS comentarios_count'))
            ->groupBy('blog_post.id_postagem', 'blog_post.id_post_user', 'blog_post.tipo_postagem', 'blog_post.tipo_arquivo', 'blog.blog_post.titulo', 'blog.blog_post.mensagem', 'blog.blog_post.file_img', 'blog.blog_post.data', 'blog.blog_post.data_drop', 'blog.blog_post.alerta_comentario', 'blog.blog_post.deletar', 'blog.blog_post.carousel', 'blog.blog_user.exibicao', 'blog.blog_post.curtidas', 'blog.blog_post.data_postagem')
            ->where('blog_post.deletar', 0)
            ->orderByDesc('blog_post.id_postagem');

        $blogPost->take(41);//mostra 21



        if ($idPostagem !== null) {
            $blogPost->where('blog_post.id_postagem', $idPostagem);
        }

        $blogPost = $blogPost->get();

        $blogPost->transform(

            function ($blogPost) {
                $blogPost->data = date('d/m/Y', strtotime($blogPost->data));

                return $blogPost;
            }

        );

        $blogPost->transform(
            function ($blogPost) {
                $blogPost->mensagem = str_replace('<p>', '', $blogPost->mensagem);
                $blogPost->mensagem = str_replace('</p>', '', $blogPost->mensagem);

                return $blogPost;
            }
        );

        $blogPost->transform(
            function ($blogPost) {
                $identificando = substr($blogPost->file_img, 0, 1);

                switch ($identificando) {
                    case 'p':
                        $blogPost->file_img = str_replace('postagens/', '../sistemaUnico/public/blog/postagens/', $blogPost->file_img);
                        break;

                    case 'b':
                        $blogPost->file_img = str_replace('blog/postagens/', '../sistemaUnico/public/blog/postagens/', $blogPost->file_img);
                        break;

                    default:
                        $blogPost->file_img = str_replace('../unico/sistemas/blog/postagens/', '../sistemaUnico/public/blog/postagens/', $blogPost->file_img);
                        break;
                }


                return $blogPost;
            }
        );

        return $blogPost;
    }
}
