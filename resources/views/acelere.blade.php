@extends('layout.master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('public/img/revista/hero-bg.jpg') }}'); background-position: 0px -64px;">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Revista acelere</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Revista acelere</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="about" class="about">
        <div class="container aos-init aos-animate" data-aos="fade-up">

            <div class="row gy-4 aos-init aos-animate" data-aos="fade-up">
                <div class="col-lg-4">
                    <img src="{{ asset('public/img/about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="content ps-lg-5">
                        <h3>Essa edição está especial! <br/><br/> Fique por dentro de tudo que acontece em nossa empresa.</h3>
                        <ul>
                            <p>
                            </p>
                            <button type="button" class="btn btn-info botao-ler" data-bs-toggle="modal" data-bs-target="#edicaoRevista">Ler agora</button>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

{{-- Modal da revista --}}
<div class="modal fade" id="edicaoRevista" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Revista acelere</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-center">Revista acelere n° 11</h5>
                            <div class="iframe-container">
                                <iframe src="{{ asset('public/img/revista/edicao11/edicao11.pdf') }}" width="1200"
                                    height="600"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer" style="margin-right: 3%">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

@endsection
