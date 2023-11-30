@extends('layout.master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('public/img/header_cardapio.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">

            <h2>Cardápio</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>cardápio</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <section id="services-cards" class="services-cards">
        <div class="container aos-init" data-aos="fade-up">

            <div class="section-header">
                <h2>Selecione o cardápio</h2>

            </div>
            <div class="row gy-4">

                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('public/img/servopaMatriz.jpg') }});"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <div>
                                        <h4 class="title">
                                            <a href="javascript:" data-bs-toggle="modal" data-bs-target="#servopaMatriz"
                                                class="stretched-link">Servopa Matriz</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6 aos-init" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ asset('public/img/servopaCamCuritiba.jpg') }});"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <div>
                                        <h4 class="title">
                                            <a href="javascript:" data-bs-toggle="modal" data-bs-target="#camCuritiba"
                                                class="stretched-link">Caminhões Curitiba</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section>

</main><!-- End #main -->

<!-- Modal SERVOPA MATRIZ-->
<div class="modal fade" id="servopaMatriz" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Cardápio Servopa Matriz</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-center">Cardápio Principal</h5>
                            <div class="iframe-container">
                                <iframe src="{{ asset('public/img/cardapio/principal.pdf') }}" width="1200"
                                    height="600"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container" style="margin-top: 5%">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-center">Du Chef</h5>
                            <div class="iframe-container">
                                <iframe src="{{ asset('public/img/cardapio/duchef.pdf') }}" width="1200" height="600"></iframe>
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

<!-- Modal SERVOPA CAMINHOES-->
<div class="modal fade" id="camCuritiba" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-4" id="exampleModalFullscreenLabel">Cardápio Caminhões Curitiba</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h5 class="text-center">Cardápio Principal</h5>
                            <div class="iframe-container">
                                <iframe src="{{ asset('public/img/cardapio/caminhoescuritiba.pdf') }}" width="1200"
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
