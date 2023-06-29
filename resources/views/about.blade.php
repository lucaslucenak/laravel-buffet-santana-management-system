@extends('layouts.app-layout')
@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/about.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <x-sidebar.sidebar>
                <x-sidebar.sidebar-item href='/home'>
                    <i class="fa-solid fa-house"></i>
                    Home
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/events'>
                    <i class="fa-solid fa-calendar-days"></i>
                    Eventos
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/clients'>
                    <i class="fa-solid fa-person"></i>
                    Clientes
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/help'>
                    <i class="fa-solid fa-circle-info"></i>
                    Ajuda
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item class="active" href='#'>
                    <i class="fa-solid fa-book"></i>
                    Sobre
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/sign-in'>
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </x-sidebar.sidebar-item>
            </x-sidebar.sidebar>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <section id="top-navbar">
                <x-top-navbar.top-navbar>
                    <x-top-navbar.top-navbar-item href="/home" class="nav-item">
                        Home
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="/events" class="nav-item">
                        Eventos
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="/clients" class="nav-item">
                        Clientes
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="/help" class="nav-item">
                        Ajuda
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="#" class="nav-item active">
                        Sobre
                    </x-top-navbar.top-navbar-item>
                </x-top-navbar.top-navbar>
            </section>

            <section id="about-card">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                                <img src="images/about/perfil.jpg" class="img-fluid" alt="Image" />
                                                <div class="img-overlay bg-dark"></div>
                                            </div>
                                        </div>
                                        <!--end col-->
                
                                        <div class="col-12">
                                            <div class="mt-4 pt-2 text-right">
                                                <a href="javascript:void(0)" class="btn btn-info">Read More <i class="mdi mdi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                                <img src="images/buffet.jpg" class="img-fluid" alt="Image" />
                                                <div class="img-overlay bg-dark"></div>
                                            </div>
                                        </div>
                                        <!--end col-->
                
                                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                                <img src="images/about/uepb.jpg" class="img-fluid" alt="Image" />
                                                <div class="img-overlay bg-dark"></div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->
                
                        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                            <div class="section-title ml-lg-5">
                                <h5 class="text-custom font-weight-normal mb-3">Um pouco sobre</h5>
                                <h4 class="title mb-4">
                                    Sistema de administração para o Buffet Santana
                                </h4>
                                <p class="text-muted mb-0">Esse projeto foi desenvolvido em demanda da matéria Interface Homem Computador, ministrada pelo professor Daniel Scherer.</p>
                
                                <div class="row">
                                    <div class="col-lg-6 mt-4 pt-2 expand-on-hover">
                                        <div class="media align-items-center rounded shadow p-3">
                                            <i class="fa-brands fa-github"></i>
                                            <h6 class="ml-3 mb-0"><a href="https://github.com/lucaslucenak" class="text-dark" target="_blank">Github</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4 pt-2 expand-on-hover">
                                        <div class="media align-items-center rounded shadow p-3">
                                            <i class="fa-solid fa-download"></i>
                                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark" download>Download ZIP</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4 pt-2 expand-on-hover">
                                        <div class="media align-items-center rounded shadow p-3">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                            <h6 class="ml-3 mb-0"><a href="https://www.linkedin.com/in/lucas-lucena-6588271a3/" class="text-dark" target="_blank">Linkedin</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4 pt-2 expand-on-hover">
                                        <div class="media align-items-center rounded shadow p-3">
                                            <i class="fa-sharp fa-regular fa-envelope"></i>
                                            <h6 class="ml-3 mb-0"><a href="mailto:lucas.lucenak@gmail.com" class="text-dark" target="_blank">Contato</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--enr row-->
                </div>
            </section>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/js/dashboard/bootstrap.min.js"></script>
    <script src="/js/dashboard/jquery.min.js"></script>
    <script src="/js/dashboard/popper.js"></script>
    <script src="/js/dashboard/main.js"></script>
@endsection
