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
                <li><a href="{{ url('lista') }}">lista de ramais</a></li>
                <li>Nome Empresa </li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->

    <section id="portfolio-details" class="portfolio-details">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                @foreach ($empresaGlpi as $empresa)

                <div class="col-lg-6">
                    <div class="portfolio-info">
                        <h3>{{ $empresa->name }} </h3>
                        <ul>
                            <li>
                                <strong>CNPJ</strong>: {{ $empresa->cnpj }}
                                <strong>Piloto</strong>: {{ $empresa->piloto }}
                                <strong>Voip</strong>: {{ $empresa->voip }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="portfolio-info">
                        <ul>
                            <li>
                                <strong>Endereço</strong>: {{ $empresa->endereco }}
                            </li>
                        </ul>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    <section id="portfolio-details" class="portfolio-details" style="margin-top: -100px">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slides-1 portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events"
                        style="font-size: 15px">
                        <table id="dataTable" class="table table-striped table-hover table-sm table-bordered"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Departamento</th>
                                    <th>E-mail</th>
                                    <th>Filial</th>
                                    <th>Ramal</th>
                                    <th>Voip</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listaGlpi as $lista)
                                <tr>
                                    <td class="nomeSobrenome">{{ $lista->nome }}</td>
                                    <td class="nomeSobrenome">{{ $lista->departamento }}</td>
                                    <td>{{ $lista->email }}</td>
                                    <td class="nomeSobrenome">{{ $lista->filial }}</td>
                                    <td>{{ $lista->pilotoRamal }}{{ $lista->ramal }}</td>
                                    <td>{{ $lista->voip }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->


@endsection
