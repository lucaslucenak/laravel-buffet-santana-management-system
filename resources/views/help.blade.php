@extends('layouts.app-layout')
@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/help-card.css">
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
                <x-sidebar.sidebar-item class="active" href='#'>
                    <i class="fa-solid fa-circle-info"></i>
                    Ajuda
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/about'>
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
                    <x-top-navbar.top-navbar-item href="#" class="nav-item active">
                        Ajuda
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="/about" class="nav-item">
                        Sobre
                    </x-top-navbar.top-navbar-item>
                </x-top-navbar.top-navbar>
            </section>
            <section id="help-card">
                <div class="container mt-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-9">
                            <div class="card p-4 mt-3">
                                <h3 class="heading mt-2 text-center">Suporte e Manuais</h3>
                                <h6 class="mt-1 text-center">
                                    Dúvida em como utilizar o sistema ou em como instalar e inicializar o projeto?
                                </br>Clique nos botões abaixo e baixe os arquivos PDFs com as instruções!
                                </h5>
                                <div class="row mt-4 g-3 justify-content-center">
                                    <x-cards.help-card>
                                        @slot('fileHref')
                                        /pdf/instalacao.txt
                                        @endslot
                                        @slot('icon')
                                        <i class="fa-solid fa-play" style="font-size: 30px;"></i>
                                        @endslot
                                        @slot('title')
                                        Instalação e inicialização do projeto
                                        @endslot
                                    </x-cards.help-card>
                                    <x-cards.help-card>
                                        @slot('fileHref')
                                        /pdf/instalacao.txt
                                        @endslot
                                        @slot('icon')
                                        <i class="fa-solid fa-book" style="font-size: 30px;"></i>
                                        @endslot
                                        @slot('title')
                                        Como utilizar o sistema desenvolvido
                                        @endslot
                                    </x-cards.help-card>
                                </div>
                            </div>
                        </div>
                    </div>
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
