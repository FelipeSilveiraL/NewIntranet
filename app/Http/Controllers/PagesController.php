<?php

namespace App\Http\Controllers;

use App\Http\Controllers\blog\QueryBlog_comentario;
use App\Http\Controllers\blog\QueryBlog_departamento;
use App\Http\Controllers\blog\QueryBlog_empresa;
use App\Http\Controllers\blog\QueryBlog_post;
use App\Http\Controllers\blog\QueryBlog_filiais;
use App\Http\Controllers\blog\QueryBlog_post_recente;
use App\Http\Controllers\glpi\QueryGlpi_ramais_empresa;
use App\Http\Controllers\glpi\QueryGlpi_ramais_usuario;
use App\Models\blog\TablesBlog_Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home($idPostagem = null, $home = false)
    {
        $queryBlogPost = new QueryBlog_Post();
        $blogPost = $queryBlogPost->blog_post($idPostagem, $home);

        $queryBlogFilial = new QueryBlog_filiais();
        $blogFiliais = $queryBlogFilial->blog_filiais();

        $queryBlogRecente = new QueryBlog_post_recente();
        $blogPostRecentes = $queryBlogRecente->blog_recentes();

        return view('home', compact('blogPost', 'blogFiliais', 'blogPostRecentes'));
    }

    public function acelere()
    {
        return view('acelere');
    }

    public function blogDetails($idPostagem = null,  $home = false)
    {
        $queryBlogPost = new QueryBlog_Post();
        $blogPost = $queryBlogPost->blog_post($idPostagem, $home);

        $queryBlogRecente = new QueryBlog_post_recente();
        $blogPostRecentes = $queryBlogRecente->blog_recentes();

        $queryBlogComentario = new QueryBlog_comentario();
        $blogComentario = $queryBlogComentario->blog_comentario($idPostagem);

        $queryBlogDepartamento = new QueryBlog_departamento();
        $blogDepartamento = $queryBlogDepartamento->blog_departamento();

        $queryBlogEmpresa = new QueryBlog_empresa();
        $blogEmpresa = $queryBlogEmpresa->blog_empresa();

        return view('blog-details', compact('blogPost', 'blogPostRecentes', 'blogComentario', 'blogDepartamento', 'blogEmpresa'));
    }

    public function blog($idPostagem = null, $home = true)
    {
        $queryBlogPost = new QueryBlog_Post();
        $blogPost = $queryBlogPost->blog_post($idPostagem, $home);

        return view('blog', compact('blogPost'));
    }

    public function cardapio()
    {
        return view('cardapio');
    }

    public function lista()
    {
        return view('lista');
    }

    public function listaDetails(Request $request, $id = null)

    {
        $departamento = substr($id, 0,1);

        $buscaInfo = $request->busca;

        $queryEmpresa = new QueryGlpi_ramais_empresa();
        $empresaGlpi = $queryEmpresa->listaEmpresa($id);

        $queryUsuario = new QueryGlpi_ramais_usuario();
        $listaGlpi = $queryUsuario->listaUsuario($buscaInfo, $id, $departamento);


        return view('lista-details', compact('listaGlpi', 'empresaGlpi'));
    }

    public function postagemCurtir($idPostagem = null){


        if ($idPostagem != null){

            $postagem = TablesBlog_Post::where('id_postagem', $idPostagem)->first();
            
            $postagem->curtidas = $postagem->curtidas + 1;
            $postagem->save();

            return redirect()->back();
        }
    }
}
