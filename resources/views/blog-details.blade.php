@extends('layout.master')

@section('content')

@if (empty($blogPost))
<?= helper_redicionar('../blog') ?>;
@endif

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('public/img/blog-header.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Detalhes da Postagem</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('blog') }}">Blog</a></li>
                <li>Detalhes postagem</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    @foreach ($blogPost as $postagem)

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">

                {{-- POSTAGEM --}}
                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <h2 class="title mb-1">{{ $postagem->titulo }}</h2>

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="{{ asset($postagem->file_img) }}" alt="" class="img-fluid">
                        </div>

                        {{-- TITULO --}}


                        {{-- DADOS POSTAGEM CRIAÇÃO/COMENTARIO/AUTOR --}}
                        <div class="meta-top mb-5 mt-3">
                            <span class="calendarioPostagem">
                                <i class="fa-solid fa-calendar text-primary"></i>
                                <time datetime="2020-01-01">{{ $postagem->data }}</time>

                            </span>
                            <span class="comentarioPostagem">
                                <i class="fa-solid fa-comment-dots text-primary"></i>
                                {{ $postagem->comentarios_count }} Comentários
                            </span>
                            <span class="resposavelPostagem">
                                <a href="javascript:" data-post-id="{{ $postagem->id_postagem }}" class="btn-like">
                                    <i class="fa-solid fa-thumbs-up text-primary"></i>
                                </a>
                                {{ $postagem->curtidas }} Curtidas
                            </span>

                        </div><!-- End meta top -->

                        {{-- MENSAGEM --}}
                        <div class="content">
                            <p>
                                <?= $postagem->mensagem ?>
                            </p>

                        </div><!-- End post content -->




                    </article><!-- End blog post -->

                    {{-- COMENTARIOS --}}
                    <div class="comments">

                        {{-- QUANTIDADE DE COMENTARIOS --}}
                        <h4 class="comments-count">{{ $postagem->comentarios_count }} Comentários</h4>

                        {{-- COMENTARIO --}}
                        <div class="comment">
                            @foreach ($blogComentario as $index => $comentario)

                            <div class="d-flex">
                                <div>
                                    <h5>
                                        @if ($comentario->nome == null)
                                        Anônimo
                                        @else
                                        {{ helper_caractesEspeciais($comentario->nome) }}
                                        @endif </h5>
                                    <time>{{ $comentario->departamento }} / {{ $comentario->empresa }} - {{
                                        $comentario->data }}</time>
                                    <p>
                                        <?= helper_caractesEspeciais($comentario->comentario) ?>
                                    </p>
                                </div>
                            </div>
                            <hr class="new2">

                            @endforeach
                        </div>

                        {{-- ADICIONAR UM NOVO COMENTÁRIO --}}

                        @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Comentário postado com sucesso!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif


                        <div class="reply-form">

                            <h4>Formulario comentários</h4>
                            <p>Para deixar o seu comentário, basta preencher todos os campos abaixo! </p>
                            <form action="{{ url('insertComentario', ['idPostagem' => request('idPostagem')]) }}"
                                method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input name="nome" type="text" class="form-control" placeholder="Seu nome"
                                            required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" name="departamento" id="departamento" required>
                                            <option value="">Departamento</option>
                                            @foreach ($blogDepartamento as $departamento)
                                            <option value="{{ $departamento->nome }}">{{ $departamento->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <select class="form-control" name="empresa" id="empresa" required>
                                            <option value="">Empresa</option>
                                            @foreach ($blogEmpresa as $empresa)
                                            <option value="{{ $empresa->nome }}">{{ $empresa->nome }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col form-group">
                                        <textarea name="comentario" class="form-control" placeholder="Comentário"
                                            required></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Postar comentário</button>

                            </form>

                        </div>

                    </div><!-- End blog comments -->

                </div>

                {{-- BARRA LATERAL DIREITA --}}
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="mb-3">Postagens <br /><b>Recentes</b></h3>
                    <div class="postagensRecentes">
                        {{-- POSTAGENS RECENTES --}}
                        @php
                        $count = 10;
                        $i = 0;
                        @endphp

                        @foreach ($blogPostRecentes as $index => $postagemRecente)

                        @if ($count > $i)

                        @if ($postagemRecente['data_postagem'] === NULL){{-- POSTAGEM NORMAL --}}
                        {!! renderPostagemRecente($postagemRecente) !!}
                        @php $i++; @endphp
                        @else
                        @if ($postagemRecente['data_postagem'] <= date('Y-m-d')){{-- POSTAGEM PROGRAMADA --}} {!!
                            renderPostagemRecente($postagemRecente) !!} @php $i++; @endphp @endif @endif @endif
                            @endforeach <a href="{{ url('blog') }}">Ver mais <i class="fa-solid fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->


@endforeach {{-- $blogPost --}}

@endsection
