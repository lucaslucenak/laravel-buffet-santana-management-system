@extends('layouts.app-layout')
@section('styles')
    <link rel="stylesheet" href="/css/dashboard.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <h3 style="color: white; text-align: center;">BUFFET SANTANA</h3>
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/logo.jpg);"></a>
                <h5 style="color: white; text-align: center;">Lucas Lucena</h5>
                <h6 style="color: white; text-align: center;">Admin</h6>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="#">Home 1</a>
                            </li>
                            <li>
                                <a href="#">Home 2</a>
                            </li>
                            <li>
                                <a href="#">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                            class="dropdown-toggle">Pages</a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li>
                                <a href="#">Page 1</a>
                            </li>
                            <li>
                                <a href="#">Page 2</a>
                            </li>
                            <li>
                                <a href="#">Page 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Portfolio</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Portfolio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
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
