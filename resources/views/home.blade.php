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
                    <x-top-navbar.top-navbar-item href="#" class="nav-item active">
                        Home
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="/events" class="nav-item">
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card"
                                style="border-radius: 10px; background: linear-gradient(to bottom right, #FEAF00, #F9CE37);">
                                <div class="card-body" style="padding-top: 30px; padding-bottom: 30px;">
                                    <i class="fa-regular fa-user" style="font-size: 50px;"></i>
                                    <h5 class="card-title" style="margin-top: 15px;">Clients</h5>
                                    <p class="card-text" style="text-align: right;">200</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="border-radius: 10px; background-color: rgb(254, 246, 251);">
                                <div class="card-body" style="padding-top: 30px; padding-bottom: 30px;">
                                    <i class="fa-regular fa-bookmark" style="font-size: 50px;"></i>
                                    <h5 class="card-title" style="margin-top: 15px;">Clients</h5>
                                    <p class="card-text" style="text-align: right;">200</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="border-radius: 10px; background-color: #F0F9FF">
                                <div class="card-body" style="padding-top: 30px; padding-bottom: 30px;">
                                    <i class="fa-regular fa-user" style="font-size: 50px;"></i>
                                    <h5 class="card-title" style="margin-top: 15px;">Clients</h5>
                                    <p class="card-text" style="text-align: right;">200</p>
                                </div>
                            </div>
                        </div>
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
@endsection
