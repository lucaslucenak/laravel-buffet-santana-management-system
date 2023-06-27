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
                <x-sidebar.sidebar-item class="active" href='#'>
                    Home
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/events'>
                    Eventos
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/clients'>
                    Clientes
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/help'>
                    Ajuda
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/about'>
                    Sobre
                </x-sidebar.sidebar-item>
            </x-sidebar.sidebar>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <section id="top-navbar">
                <x-top-navbar.top-navbar>
                    <x-top-navbar.top-navbar-item href="#" class="nav-item active">
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
                                <h3 class="heading mt-5 text-center">Hi! How can we help You?</h3>
                                <div class="d-flex justify-content-center px-5">
                                    <div class="search"> <input type="text" class="search-input" placeholder="Search..."
                                            name=""> <a href="#" class="search-icon"> <i
                                                class="fa fa-search"></i> </a> </div>
                                </div>
                                <div class="row mt-4 g-1 px-4 mb-5">
                                    <div class="col-md-2">
                                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                                src="https://i.imgur.com/Mb8kaPV.png" width="50">
                                            <div class="text-center mg-text"> <span class="mg-text">Account</span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                                src="https://i.imgur.com/ueLEPGq.png" width="50">
                                            <div class="text-center mg-text"> <span class="mg-text">Payments</span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                                src="https://i.imgur.com/tmqv0Eq.png" width="50">
                                            <div class="text-center mg-text"> <span class="mg-text">Delivery</span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                                src="https://i.imgur.com/D0Sm15i.png" width="50">
                                            <div class="text-center mg-text"> <span class="mg-text">Product</span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                                src="https://i.imgur.com/Z7BJ8Po.png" width="50">
                                            <div class="text-center mg-text"> <span class="mg-text">Return</span> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card-inner p-3 d-flex flex-column align-items-center"> <img
                                                src="https://i.imgur.com/YLsQrn3.png" width="50">
                                            <div class="text-center mg-text"> <span class="mg-text">Guarantee</span> </div>
                                        </div>
                                    </div>
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
