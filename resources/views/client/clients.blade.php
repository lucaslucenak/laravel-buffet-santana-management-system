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
            <section id="cards">
                <div class="row">
                    <x-cards.card>
                        @slot('title')
                            Adicionar novo Cliente
                        @endslot
                        @slot('description')
                            Clique no botão abaixo!
                        @endslot
                        @slot('buttonContent')

                        @endslot
                        @slot('href')
                            /clients/create
                        @endslot
                        @slot('buttonName')
                            Adicionar Cliente
                        @endslot
                    </x-cards.card>
                    <x-cards.card>
                        @slot('title')
                            Buscar Cliente
                        @endslot
                        @slot('description')
                            Selecione o parâmetro desejado, preencha e clique no botão ao lado!
                        @endslot
                        @slot('buttonContent')
                            <select id="cpfInput" style="border-radius: 10px; border: 1px solid #ccc;">
                                <option value="cpf">CPF</option>
                                <option value="rg">Nome</option>
                                <option value="cnh">E-mail</option>
                            </select>
                            <input id="cpfInput" type="text" class="mr-3" style="border-radius: 10px; border: 1px solid #ccc;">
                        @endslot
                        @slot('href')
                            /clients/search
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
                        Clientes
                    @endslot
                    @slot('thead')
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Contato</th>
                            <th scope="col">Email</th>
                            <th scope="col">Nascimento</th>
                            <th scope="col">Ver</th>
                            <th scope="col">Excluir</th>
                        </tr>
                    @endslot
                    @slot('tbody')
                        <tr>
                            <th scope="row">1</th>
                            <td>Lucas de Lucena Siqueira</td>
                            <td>114.665.750-18</td>
                            <td>Av. Paulista, 1681 - Bela Vista, São Paulo - SP, 01311-300</td>
                            <td>(83) 98690 7270</td>
                            <td>lucas.lucenak@gmail.com</td>
                            <td>19/11/2001</td>
                            <td><a href="/clients/search"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><i class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Lucas de Lucena Siqueira</td>
                            <td>114.665.750-18</td>
                            <td>Av. Paulista, 1681 - Bela Vista, São Paulo - SP, 01311-300</td>
                            <td>(83) 98690 7270</td>
                            <td>lucas.lucenak@gmail.com</td>
                            <td>19/11/2001</td>
                            <td><a href="/clients/search"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><i class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Lucas de Lucena Siqueira</td>
                            <td>114.665.750-18</td>
                            <td>Av. Paulista, 1681 - Bela Vista, São Paulo - SP, 01311-300</td>
                            <td>(83) 98690 7270</td>
                            <td>lucas.lucenak@gmail.com</td>
                            <td>19/11/2001</td>
                            <td><a href="/clients/search"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><i class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Lucas de Lucena Siqueira</td>
                            <td>114.665.750-18</td>
                            <td>Av. Paulista, 1681 - Bela Vista, São Paulo - SP, 01311-300</td>
                            <td>(83) 98690 7270</td>
                            <td>lucas.lucenak@gmail.com</td>
                            <td>19/11/2001</td>
                            <td><a href="/clients/search"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td><i class="fa-sharp fa-solid fa-trash" style="color: #db1414;"></i></td>
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
