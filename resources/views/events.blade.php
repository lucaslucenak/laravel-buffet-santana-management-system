@extends('layouts.app-layout')
@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <x-sidebar.sidebar>
                <x-sidebar.sidebar-item href='/home'>
                    Home
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item class="active" href='#'>
                    Events
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/clients'>
                    Clients
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/help'>
                    Help
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/about'>
                    About
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
                        Events
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="/clients" class="nav-item">
                        Clients
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="/help" class="nav-item">
                        Help
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="/about" class="nav-item">
                        About
                    </x-top-navbar.top-navbar-item>
                </x-top-navbar.top-navbar>
            </section>
            <section id="cards">
                <div class="row">
                    <x-cards.card>
                        @slot('title')
                            Adicionar novo Evento
                        @endslot
                        @slot('description')
                            Clique no botão abaixo!
                        @endslot
                        @slot('buttonContent')

                        @endslot
                        @slot('href')
                            /events/create
                        @endslot
                        @slot('buttonName')
                            Adicionar Evento
                        @endslot
                    </x-cards.card>
                    <x-cards.card>
                        @slot('title')
                            Buscar Evento
                        @endslot
                        @slot('description')
                            Selecione o parâmetro desejado preecha e clique no botão ao lado!
                        @endslot
                        @slot('buttonContent')
                            <select id="cpfInput" style="border-radius: 10px; border: 1px solid #ccc;">
                                <option value="cpf">CPF</option>
                                <option value="rg">Nome</option>
                                <option value="cnh">Data</option>
                            </select>
                            <input id="cpfInput" type="text" class="mr-3" style="border-radius: 10px; border: 1px solid #ccc;">
                        @endslot
                        @slot('href')
                            /events/search
                        @endslot
                        @slot('buttonName')
                        Buscar
                        @endslot
                    </x-cards.card>
                </div>

            </section>

            <section id="table">
                <x-table.table>
                    @slot('title')
                        Events
                    @endslot
                    @slot('thead')
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Data</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Situação</th>
                            <th scope="col">Ver</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    @endslot
                    @slot('tbody')
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="/events/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><a href="/events/delete" class="confirm-delete-link" data-toggle="modal" data-target="#confirmDeleteModal" data-item-id="1"><i class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="/events/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><a href="/events/delete" class="confirm-delete-link" data-toggle="modal" data-target="#confirmDeleteModal" data-item-id="1"><i class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="/events/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><a href="/events/delete" class="confirm-delete-link" data-toggle="modal" data-target="#confirmDeleteModal" data-item-id="1"><i class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></a></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><a href="/events/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><a href="/events/delete" class="confirm-delete-link" data-toggle="modal" data-target="#confirmDeleteModal" data-item-id="1"><i class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></a></td>
                        </tr>
                    @endslot
                    <x-confirm-delete-modal>
                        @slot('description')
                        Deseja realmente excluir o evento? </br>Esta ação é irreversível. 
                        @endslot
                        @slot('href')
                        /home
                        @endslot
                    </x-confirm-delete-modal>
                </x-table.table>
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
@endsection
