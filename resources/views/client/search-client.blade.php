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
                <x-sidebar.sidebar-item href='/events'>
                    <i class="fa-solid fa-calendar-days"></i>
                    Eventos
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item class="active" href='#'>
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
                    <x-top-navbar.top-navbar-item href="/events" class="nav-item">
                        Eventos
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="#" class="nav-item active">
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
                        /clients
                    @endslot
                    @slot('goBackHref')
                        /clients
                    @endslot
                    @slot('formTitle')
                        Editar Cliente
                    @endslot
                    @slot('formRows')
                        <x-forms.form-row>
                            @slot('name')
                                Nome Completo
                            @endslot
                            @slot('defaultValue')
                                Lucas de Lucena Siqueira
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                CPF
                            @endslot
                            @slot('defaultValue')
                                114.665.750-18
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                Endereço
                            @endslot
                            @slot('defaultValue')
                                Av. Paulista, 1681 - Bela Vista, São Paulo - SP, 01311-300
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                E-mail
                            @endslot
                            @slot('defaultValue')
                                lucas.lucenak@gmail.com
                            @endslot
                        </x-forms.form-row>
                        <x-forms.form-row>
                            @slot('name')
                                Data de Nacimento
                            @endslot
                            @slot('defaultValue')
                            19/11/2001
                            @endslot
                        </x-forms.form-row>
                        <div class="form-row m-b-55">
                            <div class="name">Celular</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code" value="83">
                                            <label class="label--desc">DDD</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone" value="98690 7270">
                                            <label class="label--desc">Número</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endslot
                    @slot('deleteButton')
                    <a class="btn btn--radius-2 btn--red btn-register confirm-delete-link" style='background-color:#df2323; color:white;'data-toggle="modal" data-target="#confirmDeleteModal" >Excluir</a>
                    @endslot
                    @slot('buttonName')
                        Registrar Cliente
                    @endslot
                </x-forms.form>
                <x-confirm-delete-modal>
                    @slot('description')
                    Deseja realmente excluir o cliente? </br>Esta ação é irreversível. 
                    @endslot
                    @slot('href')
                    /clients
                    @endslot
                </x-confirm-delete-modal>
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
