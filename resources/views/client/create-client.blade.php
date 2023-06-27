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
                    Home
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item href='/events'>
                    Events
                </x-sidebar.sidebar-item>
                <x-sidebar.sidebar-item class="active" href='#'>
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
                    <x-top-navbar.top-navbar-item href="/events" class="nav-item">
                        Events
                    </x-top-navbar.top-navbar-item>
                    <x-top-navbar.top-navbar-item href="#" class="nav-item active">
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

            <section id="form">
                <x-forms.form>
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
