@extends('layouts.app-layout')
@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
    <link rel="stylesheet" href="/css/create-form.css">
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
                <x-sidebar.sidebar-item class="active" href='#'>
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
                    <x-top-navbar.top-navbar-item href="#" class="nav-item active">
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

            <section id="form">
                <x-forms.form>
                    @slot('registerHref')
                        /events
                    @endslot
                    @slot('goBackHref')
                        /events
                    @endslot
                    @slot('formTitle')
                        Registrar novo evento
                    @endslot
                    @slot('formRows')
                        <x-forms.form-row>
                            @slot('name')
                                Endereço de Realização
                            @endslot
                            @slot('defaultValue')
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                Data
                            @endslot
                            @slot('defaultValue')
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                Valor
                            @endslot
                            @slot('defaultValue')
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                Situação
                            @endslot
                            @slot('defaultValue')
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                Cliente Relacionado
                            @endslot
                            @slot('defaultValue')
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                Método de pagamento
                            @endslot
                            @slot('defaultValue')
                            @endslot
                        </x-forms.form-row>
                    @endslot
                    @slot('deleteButton')
                    @endslot
                    @slot('buttonName')
                        Registrar Evento
                    @endslot
                </x-forms.form>
            </section>

        </div>
    </div>
@endsection
@section('scripts')
    <script src="/js/dashboard/bootstrap.min.js"></script>
    <script src="/js/dashboard/jquery.min.js"></script>
    <script src="/js/dashboard/popper.js"></script>
    <script src="/js/dashboard/main.js"></script>
    <script src="/js/events/search.js"></script>
    <script src="/js/create-form.js"></script>
@endsection
