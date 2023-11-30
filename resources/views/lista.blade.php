@extends('layout.master')

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center"
        style="background-image: url('{{ asset('public/img/lista_header.jpg') }}');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Lista de Ramais</h2>
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>lista de ramais</li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->


    {{-- DEPARTAMENTOS / BUSCA --}}
    <section id="departamentos" class="features">
        <div class="container aos-init" data-aos="fade-up">
            <div class="row">
                <div class="section-header">
                    <h2>Departamentos</h2>
                </div>

                {{-- DEPARTAMENTO --}}
                <div class="col-lg-12 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="row gy-5">
                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D1']) }}">
                                    <i class="fa-solid fa-screwdriver-wrench" style="color: #ffbb2c;"></i>
                                    <span>T.I</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->

                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D8']) }}">
                                    <i class="fa-regular fa-clipboard" style="color: #5578ff;"></i>
                                    <span>Auditoria</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->

                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => '6']) }}">
                                    <i class="fa-solid fa-users-gear" style="color: #e80368;"></i>
                                    <span>C.A</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->

                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D49']) }}">
                                    <i class="fa-solid fa-users" style="color: #e361ff;"></i>
                                    <span>R.H</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->

                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D26']) }}">
                                    <i class="fa-solid fa-box-archive" style="color: #47aeff;"></i>
                                    <span>C.S.C</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->

                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D42']) }}">
                                    <i class="fa-brands fa-teamspeak" style="color: #ffa76e;"></i>
                                    <span>Omni-Center</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->

                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D25']) }}">
                                    <i class="fa-solid fa-car-side" style="color: #11dbcf;"></i>
                                    <span>Despachante</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->

                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D119']) }}">
                                    <i class="fa-solid fa-car-side" style="color: #e69840;"></i>
                                    <span>Despachante - CWB</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->

                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D61']) }}">
                                    <i class="fa-solid fa-calendar-days" style="color: #ff5828;"></i>
                                    <span>Agendamento</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->
                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D12']) }}">
                                    <i class="fa-solid fa-bullhorn" style="color: #161515;"></i>
                                    <span>Brisa</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->
                        <div class="col-md-3">
                            <div class="icon-list d-flex">
                                <a href="{{ url('lista-details', ['idDepart' => 'D120']) }}">
                                    <i class="fa-solid fa-suitcase-medical" style="color: red;"></i>
                                    <span>Enfermagem</span>
                                </a>
                            </div>
                        </div><!-- End Icon List Item-->
                    </div>
                </div>

                {{-- BUSCA --}}
                <div class="col-lg-12 aos-init mt-5" data-aos="fade-up" data-aos-delay="100">

                    <div class="section-header">
                        <h2>Busca</h2>
                    </div>

                    <div id="blog" class="blog">
                        <div class="container aos-init aos-animate" data-aos="fade-up">
                            <div class="row g-5">
                                <div class="sidebar ps-lg-4">
                                    <div class="sidebar-item search-form">
                                        <h3 class="sidebar-title">Buscar</h3>
                                        <form action="{{ url('lista-details') }}" method="POST" class="mt-3">
                                            @csrf
                                            <input type="text" name="busca" placeholder="Nome ou E-mail do colaborador" required>
                                            <button type="submit"><i class="bi bi-search"></i></button>
                                        </form>
                                    </div>
                                </div><!-- End Blog Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- MARCAR LOCALIDADE --}}
    <section id="recent-posts" class="recent-posts">
        <div class="container aos-init" data-aos="fade-up">

            <div class="section-header">
                <h2>Marcas / Localidade</h2>

            </div>

            <div class="row gy-5">

                {{-- SERVOPA --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/app1.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 4]) }}">Matriz</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 5]) }}">Marechal</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 7]) }}">Pinheirinho</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 17]) }}">Mário Tourinho</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 22]) }}">Paranaguá</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 79]) }}">Paranavaí</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 13]) }}">PG Oficinas</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 11]) }}">Maringá</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 25]) }}">Hauer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- CAMINHOES --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/app2.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 24]) }}">Curitiba</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 35]) }}">Cambé</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 104]) }}">S.J dos Pinhais</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- AUDI --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/app3.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 84]) }}">Mário Tourinho</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 91]) }}">Alto da XV</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 85]) }}">Cascavel</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 42]) }}">Maringá</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- HYUNDAI --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/app7.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 9]) }}">Marechal</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 10]) }}">Arthur Bernardes</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 43]) }}">C. Porto Alegre</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 44]) }}">C. Canoas</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 46]) }}">C. Bento Gonçalves</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 45]) }}">C. Novo Hamburgo</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 106]) }}">C. Gravataí</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- HONDA --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/app5.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 1]) }}">Curitiba</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 2]) }}">S.J dos Pinhais</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 3]) }}">Maringá</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 100]) }}">Maringá Funilaria</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 28]) }}">Londrina</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- CITROEN --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/peugeot.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 59]) }}">L.Porto Alegre</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 60]) }}">L.Edu Chaves</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 58]) }}">L.Novo Hamburgo</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 61]) }}">L.Canoas</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 92]) }}">L.Ceará</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 93]) }}">L.Jardim Botânico</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- VOLVO --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/app4.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 96]) }}">Curitiba</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 102]) }}">Cascavel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- CONSORCIO --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/web1.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="http://intranet.consorcio.local/listRamais" target="_bank">Lista de Ramais</a></li>
                                {{-- <li><a href="{{ url('lista-details', ['idEmpresa' => 54]) }}">Londrina</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 55]) }}">Maringá</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 30]) }}">Curitiba</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- BYD --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/app10.png') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 105]) }}">Curitiba</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- HARLEY-DAVIDSON --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/card1.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 18]) }}">Curitiba</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 21]) }}">Londrina</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 97]) }}">Ribeirão Preto</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- TRIUMPH --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/card3.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 19]) }}">Curitiba</a></li>
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 32]) }}">Londrina</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- DUCATI --}}
                <div class="col-xl-2 col-md-1 aos-init" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div><img src="{{ asset('public/img/portfolio/card2.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="col-lg-12 col-6">
                            <ul class="dropListMenu">
                                <li><a href="{{ url('lista-details', ['idEmpresa' => 20]) }}">Curitiba</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main><!-- End #main -->

@endsection
