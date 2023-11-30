<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- ======= Head ======= -->

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Intranet - Grupo Servopa</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('public/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('public/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }} " rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }} " rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }} " rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('resources/css/main.css') }} " rel="stylesheet">

    <!-- fontawesome - Latest Version 6 -->
    <script src="https://kit.fontawesome.com/1d7e53d70d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/1d7e53d70d.css" crossorigin="anonymous">
</head><!-- End Head -->

<!-- ======= Header ======= -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="{{ url('/') }}" class="logo cta-btn d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('public/img/logo.png') }}" alt="">
            {{-- <h1 class="d-flex align-items-center">INTRANET</h1> --}}
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        <nav id="navbar" class="navbar">
            <ul>
                {{-- ABERTURA DE CHAMADOS --}}
                <li class="dropdown">
                    <a href="#">
                        <span>Chamados</span>

                    </a>
                    <ul class="dropDownList">
                        <li><a href="/glpi" target="_blank">Grupo Servopa</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="http://srvphpprod.consorcio.local/glpi/" target="_blank">Consórcio</a></li>
                    </ul>
                </li>

                {{-- LISTA DE RAMAIS --}}
                <li><a href="{{ url('lista') }}">Ramais</a></li>

                {{-- DEPARTAMENTOS --}}
                <li class="dropdown">
                    <a href="#"><span>Departamentos</span>

                    </a>
                    <ul class="dropDownList">
                        <li><a href="https://sites.google.com/a/servopa.com.br/auditoria/?pli=1&authuser=1"
                                target="_blank">Auditoria</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="https://sites.google.com/servopa.com.br/cadastro/home?pli=1&authuser=1"
                                target="_blank">Cadastro</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Compras</span>

                            </a>
                            <ul>
                                <li><a href="https://www.otkweb.com.br/login" target="_blank">Solicitação
                                        Material</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="https://sites.google.com/servopa.com.br/gestaocompartilhada/gestão-compartilhada?pli=1&authuser=1"
                                target="_blank">Gestão Compartilhada</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>

                        <li class="dropdown">
                            <a href="#"><span>R.H</span>

                            </a>
                            <ul class="dropDownList">
                                <li><a href="https://sites.google.com/a/servopa.com.br/rh/home?pli=1&authuser=1"
                                        target="_blank">Portal</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="{{ url('acelere') }}">Revista Acelere</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>T.I</span>

                            </a>
                            <ul class="dropDownList">
                                <li class="dropdown">
                                    <a href="#"><span>Homologação</span>

                                    </a>
                                    <ul class="dropDownList">
                                        <li><a href="/moodle/login/index.php" target="_blank">Universidade</a></li>
                                        <li class="menu-divider">
                                            <hr>
                                        </li>
                                        <li><a href="https://smart-tst.gruposervopa.com.br/smartshare/home/auth/login"
                                                target="_blank">SmartShare</a></li>
                                        <li class="menu-divider">
                                            <hr>
                                        </li>
                                        <li><a href="http://10.100.1.214/sistemaUnico" target="_blank">Sistemas
                                                Unico</a></li>
                                        <li class="menu-divider">
                                            <hr>
                                        </li>
                                        <li><a href="http://10.100.1.214/glpi/index.php" target="_blank">GLPI(Grupo
                                                Servopa)</a></li>
                                    </ul>
                                </li>
                                <li class="menu-divider">
                                    <hr>
                                </li>

                                <li><a href="https://sites.google.com/a/servopa.com.br/manual-grupo-servopa/home?pli=1&authuser=1"
                                        target="_blank">Manuais / Documentos</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="http://rede.paranapart.com.br/sistemaUnico/" target="_blank">Sistema
                                        Unico</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://app.vexsoft.com.br/login.php?returnUrl=/" target="_blank">VEX</a>
                                </li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://gruposervopa.fluig.com/portal/home" target="_blank">Fluig</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- MARCA --}}
                <li class="dropdown">
                    <a href="#"><span>Marcas</span>

                    </a>
                    <ul class="dropDownList">
                        <li class="dropdown">
                            <a href="#"><span>Consórcio</span>

                            </a>
                            <ul class="dropDownList">
                                <li><a href="http://intranet.consorcio.local" target="_blank">ComunicAí</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="https://www.hyundai.com.br" target="_blank">Hyundai</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="https://carros.peugeot.com.br" target="_blank">Peugeot</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="https://triumphcwb.com.br" target="_blank">Triumph</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>

                        <li class="dropdown">
                            <a href="#"><span>Audi</span>

                            </a>
                            <ul class="dropDownList">
                                <li><a href="https://auth.portaltecsinapse.com.br/realms/Audi/protocol/openid-connect/auth?response_type=code&client_id=AudiPortal&redirect_uri=https%3A%2F%2Fciaudibrasil.com.br%2F&state=2802%2F2e849bd2-2ad0-4ca3-9a0a-faa6d92a9099&login=true&scope=openid"
                                        target="_blank">Portal Audi</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://auditraining.konviva.com.br/lms/#/home"
                                        target="_blank">Training</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://grp.cpn.vwg/isam/sps/authsvc/policy/grpuidpw?Target=https://grp.cpn.vwg/"
                                        target="_blank">Portal Rede VW</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.revisoesplanejadasaudi.com.br/login.aspx?ReturnUrl=%2f"
                                        target="_blank">Revisões Planejadas</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://cem-portal-audi.ttr-group.de" target="_blank">CSS</a></li>

                            </ul>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Honda</span>

                            </a>
                            <ul class="dropDownList">
                                <li><a href="https://www.hondaposvenda.com.br/Portal/adm/Account/Index?ReturnUrl=%2fPortal%2fadm%2f"
                                        target="_blank">Pós Vendas Honda</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://myhonda.my.site.com/concessionaria/login?ec=302&inst=61&startURL=%2Fconcessionaria%2Fapex%2FmyHonda_LeadBox%3Fsfdc.tabName%3D01r61000000edb2"
                                        target="_blank">My Honda</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www1.hondaihs.com.br" target="_blank">Honda IHS</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Volkswagen</span>

                            </a>
                            <ul class="dropDownList">
                                <li><a href="http://www.portalredevw.com.br" target="_blank">Portal Rede VW</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.vw.com.br/pt.html" target="_blank">Volkswagen Brasil</a>
                                </li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://portal.cpn.vwg/login/login_en.html" target="_blank">Portal
                                        CPN</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://dcs1.volkswagen.com.br" target="_blank">Sivolks / Sincro</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Harley-Davidson</span>

                            </a>
                            <ul class="dropDownList">
                                <li><a href="https://www.harley-davidson.com/br/pt/index.html"
                                        target="_blank">Harley-Davidson</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://theoneharley-davidson.com.br" target="_blank">The One
                                        Harley</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://redwheelharley-davidson.com.br" target="_blank">Red Wheel
                                        Harley</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.h-dnet.com/isam/sps/auth" target="_blank">Sing On</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                {{-- NOTAS ELETRÔNICAS --}}
                <li class="dropdown">
                    <a href="#"><span>Notas Eletrônicas</span>

                    </a>
                    <ul class="dropDownList">

                        <li class="dropdown">
                            <a href="#"><span>Detran</span>

                            </a>
                            <ul class="dropDownList">
                                <li><a href="https://www.extratodebito.detran.pr.gov.br/detranextratos/geraExtrato.do?action=iniciarProcesso"
                                        target="_blank">Detran PR</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.detran.sc.gov.br/veiculos/" target="_blank">Detran SC</a>
                                </li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.detran.ac.gov.br/site/apps/veiculo/consulta/filtro-consulta-veiculo.jsp"
                                        target="_blank">Detran AC</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.detran.al.gov.br" target="_blank">Detran AL</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://digital.detran.am.gov.br/?openModalVeiculo=%2Fveiculo%2Fmultas"
                                        target="_blank">Detran AM</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.detran.ap.gov.br/detranap/veiculo/consulta-de-veiculos/"
                                        target="_blank">Detran AP</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="http://www.servicos.detran.ba.gov.br/pages/consultaveiculo/consultaveiculoindex.xhtml"
                                        target="_blank">Detran BA</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://sistemas.detran.ce.gov.br/central/" target="_blank">Detran
                                        CE</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://getran.detran.df.gov.br/site/veiculos/consultas/filtroplacarenavam-consultaveiculo.jsp"
                                        target="_blank">Detran DF</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://publicodetran.es.gov.br/ConsultaVeiculo/NovoConsultaVeiculoES.asp"
                                        target="_blank">Detran ES</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.detran.go.gov.br/psw/#/pages/pagina-inicial"
                                        target="_blank">Detran GO</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="http://licenciamento.detran.ma.gov.br/Licenciamento/consulta/Home.xhtml"
                                        target="_blank">Detran MA</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.detran.mg.gov.br/veiculos/situacao-do-veiculo/consulta-situacao-do-veiculo"
                                        target="_blank">Detran MG</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://www.detran.mt.gov.br" target="_blank">Detran MT</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Notas Eletônicas</span>

                            </a>
                            <ul class="dropDownList">
                                <li><a href="http://www.notaparana.pr.gov.br" target="_blank">PR</a></li>
                                <li class="menu-divider">
                                    <hr>
                                </li>
                                <li><a href="https://fazenda.rs.gov.br/inicial" target="_blank">RS</a></li>
                            </ul>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="https://www.comven.com.br/renave/" target="_blank">Renaven-NBS</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="https://buscacepinter.correios.com.br/app/endereco/index.php" target="_blank">Busca
                                CEP</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="http://10.100.1.138/eFormseMonitor/Account/Login" target="_blank">E-monitor</a>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="http://10.100.1.138/eFormsColdweb/Account/Login" target="_blank">ColdWeb</a>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="http://srvctpeugeot306:8080/dianfse/servlet/hnfse0001" target="_blank">Dianfse</a>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="http://www.sintegra.gov.br" target="_blank">Sintegra</a></li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="http://www.roseno.info/cidadesconsulta.aspx" target="_blank">Código IBGE</a>
                        </li>
                        <li class="menu-divider">
                            <hr>
                        </li>
                        <li><a href="https://www.bcb.gov.br/acessoinformacao/legado?url=https:%2F%2Fwww.bcb.gov.br%2Frex%2FCenso2000%2Fport%2Fmanual%2Fpais.asp%3Fidpai%3Dcenso2000inf"
                                target="_blank">Cód. Cidade SISBAGEN</a></li>
                    </ul>
                </li>
                {{-- CARDAPIO--}}
                <li><a class="cta-btn" href="{{ url('cardapio') }}">Cardápio</a></li>
            </ul>
        </nav><!-- .navbar -->
    </div>

</header><!-- End Header -->

<!-- ======= Sistemas ======= -->
<div id="menuList" class="container-fluid menuList">
    <a href="javascript:" data-bs-toggle="collapse" data-bs-target="#menuSistemas" aria-expanded="false"
        aria-controls="menuSistemas">
        <img src="{{ asset('public/img/iconeMenu.png') }}" alt="IconeMenu" class="imgSistemas">
    </a>
    <div class="row collapse sistemaslista" id="menuSistemas">
        <div class="container">
            <a href="javascript:" data-bs-toggle="collapse" data-bs-target="#menuSistemas" aria-expanded="false"
                aria-controls="menuSistemas">
                <img src="{{ asset('public/img/iconeMenu.png') }}" alt="IconeMenu" class="imgSistemas">
            </a>
            <ul class="list-group">
                <li>
                    <a href="{{ asset('public/app/APOLLO.rdp') }}" download>
                        APOLLO
                    </a>
                    /
                    <a href="{{ asset('public/app/NBS.rdp') }}" download>
                        NBS
                    </a>
                </li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://apps.autoavaliar.com.br/login/app" target="_blank">AUTO
                        AVALIAR</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://ascent.servopa.com.br/login.aspx?ReturnUrl=%2f" target="_blank">ASCENT</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://cotavw.com.br" target="_blank">COTAVW</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="http://sisrev.gruposervopa.local:9080/SISREV/servlet/app" target="_blank">SISREV</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://appsmart.gruposervopa.com.br/smartshare/home/auth/login" target="_blank">SMART
                        SHARE</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="http://rede.paranapart.com.br/sistemaUnico/" target="_blank">SISTEMA UNICO</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">GMAIL</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="http://10.100.1.77:8090/p-pov-planning/login.xhtml" target="_blank">PLATAFORMA P-POV</a>
                </li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://syonet.gruposervopa.com.br/portal/app.do?modulo=login#/login"
                        target="_blank">SYONET</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://gruposervopa.satelitti.com.br/suite-new/auth/login" target="_blank">SATELITTI
                        S-Sign</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://roover.gruposervopa.com.br" target="_blank">ROOVER -
                        RH</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li><a href="https://srvqlikserver.gruposervopa.com.br" target="_blank">B.I
                        SERVOPA</a></li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li>
                    <a href="http://10.100.1.171:81/LinxDMSPrincipal/#/login" target="_blank">LINX DMS</a>
                </li>
                <li class="menu-dividerSistemas">
                    <hr>
                </li>
                <li class="mb-4"><a href="https://app-deal.gruposervopa.com.br/app_vendas/" target="_blank">APP -
                        Vendas</a></li>
            </ul>
        </div>

    </div>

</div><!-- End Sistemas -->

<!-- ======= Body ======= -->

<body class="page-index">

    @yield('content')

</body><!-- End Body -->

</html>

<!-- ======= Footer ======= -->
<footer class="bg-dark text-center footer">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://pt-br.facebook.com/gruposervopa"
                role="button" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            /gruposervopa
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/grupo_servopa/"
                role="button" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            @grupo_servopa
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/company/grupo-servopa/"
                role="button" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            /company/grupo-servopa

            <!-- Consórcio Servopa -->
            <a class="btn btn-outline-light btn-floating m-1" href="http://intranet.consorcio.local/" role="button"
                target="_blank">
                <i class="fa-solid fa-link"></i>
            </a>
            Intranet Consórcio
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © Grupo Servopa | 2023
    </div>
    <!-- Copyright -->

</footer><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('resources/js/seg.js') }}"></script>

{{-- CURTIDAS JS --}}
<script src="{{ asset('resources/js/curtidas.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('resources/js/main.js') }}"></script>

{{-- DATA TABLE --}}
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/plug-ins/1.13.5/i18n/pt-BR.json"></script>

{{-- IDIOMA TABELA --}}
<script>
    var table = new DataTable('#dataTable', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/pt-BR.json',
    },
});
</script>
