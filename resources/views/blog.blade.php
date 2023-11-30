@extends('layout.master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('public/img/blog-header.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Blog</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Blog</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                {{-- BLOG POSTAGENS --}}
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

                    <div class="row gy-5 posts-list">
                        @foreach ($blogPost as $postagem)

                            @if ($postagem['data_postagem'] === NULL){{-- POSTAGEM NORMAL --}}
                                <div class="col-lg-4">
                            @else
                                @if ($postagem['data_postagem'] == date('Y-m-d')){{-- POSTAGEM PROGRAMADA --}}
                                <div class="col-lg-4">{{-- REALIZAR A POSTAGEM --}}
                                @else
                                <div class="col-lg-4" style="display: none">{{-- NÃO REALIZAR A POSTAGEM --}}
                                @endif
                            @endif

                            <article class="d-flex flex-column">

                                <div class="post-img">
                                    <img src="{{ asset($postagem->file_img) }}" alt="" class="img-fluid">
                                </div>

                                <h2 class="title">
                                    <a href="{{ url('blog-details', ['idpostagen' => $postagem->id_postagem]) }}">{{
                                        $postagem->titulo
                                        }}</a>
                                </h2>

                                <div class="meta-top">
                                    <ul style="margin-left: 25px;">
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-calendar text-primary"></i>
                                            <time datetime="2022-01-01">{{ $postagem->data }}</time>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="fa-solid fa-comment-dots text-primary"></i>
                                            {{ $postagem->comentarios_count }} Comentários
                                        </li>
                                        <li>
                                            <a href="javascript:" data-post-id="{{ $postagem->id_postagem }}"
                                                class="btn-like">
                                                <i class="fa-solid fa-thumbs-up text-primary"></i>
                                            </a>
                                            {{ $postagem->curtidas }} Curtidas
                                        </li>
                                    </ul>
                                </div>

                                <div class="content">
                                    <p>
                                        @php
                                        $msn = substr($postagem->mensagem, 0, 61);
                                        @endphp
                                        <?= $msn ?>...

                                    </p>
                                </div>

                                <div class="read-more mt-auto align-self-end">
                                    <a href="{{ url('blog-details', ['idPostagem' => $postagem->id_postagem]) }}"><u>Leia
                                            mais </u><i class="fa-solid fa-caret-right"></i></a>
                                </div>

                            </article>

                        </div><!-- End post list item -->

                        @endforeach
                    </div><!-- End blog posts list -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Section -->

</main><!-- End #main -->


@endsection
