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
                        Adicionar novo Cliente
                        @endslot
                        @slot('description')
                        Clique no botão abaixo e preencha todos os campos!
                        @endslot
                        @slot('link')
                        Adicionar Cliente
                        @endslot
                      </x-cards.card>
                      <x-cards.card>
                        @slot('title')
                        Buscar Cliente
                        @endslot
                        @slot('description')
                        Selecione o parâmetro desejado e preencha o campo!
                        @endslot
                        @slot('link')
                        Pesquisar Cliente
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
                            <th scope="col">Status</th>
                            <th scope="col">View</th>
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
                            <td><i class="fa-regular fa-eye"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><i class="fa-regular fa-eye"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><i class="fa-regular fa-eye"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><i class="fa-regular fa-eye"></i></td>
                        </tr>
                    @endslot
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
