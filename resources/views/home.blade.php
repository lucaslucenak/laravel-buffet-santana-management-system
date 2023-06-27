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
            <section id="cards">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card"
                                style="border-radius: 10px; background: linear-gradient(to bottom right, #FEAF00, #F9CE37);">
                                <div class="card-body" style="padding-top: 30px; padding-bottom: 30px;">
                                    <i class="fa-regular fa-user" style="font-size: 50px;"></i>
                                    <h5 class="card-title" style="margin-top: 15px;">Clientes</h5>
                                    <p class="card-text" style="text-align: right;">200</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="border-radius: 10px; background-color: rgb(254, 246, 251);">
                                <div class="card-body" style="padding-top: 30px; padding-bottom: 30px;">
                                    <i class="fa-regular fa-bookmark" style="font-size: 50px;"></i>
                                    <h5 class="card-title" style="margin-top: 15px;">Eventos</h5>
                                    <p class="card-text" style="text-align: right;">200</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="border-radius: 10px; background-color: #F0F9FF">
                                <div class="card-body" style="padding-top: 30px; padding-bottom: 30px;">
                                    <i class="fa-regular fa-user" style="font-size: 50px;"></i>
                                    <h5 class="card-title" style="margin-top: 15px;">Capacidade</h5>
                                    <p class="card-text" style="text-align: right;">200</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="table">
                <section id="table">
                    <x-table.table>
                        @slot('title')
                            Eventos
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
                                <td>Lucas de Lucena Siqueira</td>
                                <td>Celeble La Vie - Lagoa Seca - PB, 58120-000</td>
                                <td>28/06/2023</td>
                                <td>R$ 75.063,20</td>
                                <td>Pago</td>
                                <td><a href="/events/search"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a href="/events/delete" class="confirm-delete-link" data-toggle="modal"
                                        data-target="#confirmDeleteModal" data-item-id="1"><i class="fa-sharp fa-solid fa-trash"
                                            style="color: #db1414;"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Lucas de Lucena Siqueira</td>
                                <td>Celeble La Vie - Lagoa Seca - PB, 58120-000</td>
                                <td>28/06/2023</td>
                                <td>R$ 75.063,20</td>
                                <td>Pago</td>
                                <td><a href="/events/search"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a href="/events/delete" class="confirm-delete-link" data-toggle="modal"
                                        data-target="#confirmDeleteModal" data-item-id="1"><i class="fa-sharp fa-solid fa-trash"
                                            style="color: #db1414;"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Lucas de Lucena Siqueira</td>
                                <td>Celeble La Vie - Lagoa Seca - PB, 58120-000</td>
                                <td>28/06/2023</td>
                                <td>R$ 75.063,20</td>
                                <td>Pago</td>
                                <td><a href="/events/search"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a href="/events/delete" class="confirm-delete-link" data-toggle="modal"
                                        data-target="#confirmDeleteModal" data-item-id="1"><i
                                            class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Lucas de Lucena Siqueira</td>
                                <td>Celeble La Vie - Lagoa Seca - PB, 58120-000</td>
                                <td>28/06/2023</td>
                                <td>R$ 75.063,20</td>
                                <td>Pago</td>
                                <td><a href="/events/search"><i class="fa-regular fa-pen-to-square"></i></a></td>
                                <td><a href="/events/delete" class="confirm-delete-link" data-toggle="modal"
                                        data-target="#confirmDeleteModal" data-item-id="1"><i
                                            class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></a></td>
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
