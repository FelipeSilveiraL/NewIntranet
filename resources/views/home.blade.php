@extends('layout.master')

@section('content')

<main id="main">
    <!-- ======= BLOG ======= -->
    <section id="recent-posts" class="recent-posts mt-5 hero d-flex align-items-center">

        <div class="container" data-aos="fade-up">

            <div class="row gy-5 mt-2">
                <div class="container">
                    <div class="row">

                        {{-- POSTAGENS PRINCIPAIS --}}
                        <div class="col-sm-7">
                            @php
                            $count = 3;
                            $i = 0;
                            @endphp

                            @foreach ($blogPost as $postagem)

                            @if ($count > $i)

                            @if ($postagem['data_postagem'] === NULL){{-- POSTAGEM NORMAL --}}
                            {!! renderPostagem($postagem) !!}
                            @php $i++; @endphp
                            @else
                            @if ($postagem['data_postagem'] <= date('Y-m-d')){{-- POSTAGEM PROGRAMADA --}}
                            {!! renderPostagem($postagem) !!}
                            @php $i++; @endphp
                            @endif
                            @endif

                            @endif

                            @endforeach
                        </div>{{-- END POSTAGENS PRINCIPAIS --}}


                        {{-- POSTAGENS RECENTES --}}
                        <div class="col-sm-4 recentes">
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
                                @if ($postagemRecente['data_postagem'] <= date('Y-m-d')){{-- POSTAGEM PROGRAMADA --}}
                                {!! renderPostagemRecente($postagemRecente) !!}
                                @php $i++; @endphp
                                @endif
                                @endif

                                @endif

                                @endforeach

                                <a href="{{ url('blog') }}">Ver mais <i class="fa-solid fa-caret-right"></i></a>
                            </div>
                        </div>{{-- END POSTAGEN RECENTES --}}
                    </div>

                    <div class="row">
                        <div class="col-lg-7 botaoPostagensMais" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{ url('blog') }}" class="btn-get-started"><b>Mais</b> Postagens</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End BLOG -->

    <!-- ======= LOGOS EMPRESAS ======= -->
    <section id="empresas" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Nossos sites</h2>

            </div>

            <div class="row gy-4">
                @php
                $delay = 100;
                @endphp

                @foreach ($blogFiliais as $filiais)

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="{{ $delay }}">
                    <div class="team-member">
                        <div class="member-img">
                            <img src="{{asset($filiais->imagem)}}" class="img-fluid" alt="">
                            <div class="social">
                                <a href="{{ $filiais->link }}" target="_blank"><i class="fa-solid fa-link"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            @php

                            $split = explode("-", $filiais->titulo);
                            echo '<h4>'. trim($split[1]) .'</h4>';
                            echo '<span>'. trim($split[0]) .'</span>';
                            @endphp
                        </div>
                    </div>
                </div><!-- End Team Member -->
                @php
                $delay += 100;
                @endphp

                @endforeach

            </div>

        </div>
    </section><!-- End LOGOS EMPRESAS -->

</main><!-- End #main -->

@endsection
