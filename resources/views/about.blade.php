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

            <section id="about-card">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 pt-2 mt-sm-0 opt-sm-0">
                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                                <img src="https://www.bootdey.com/image/241x362/FFB6C1/000000" class="img-fluid" alt="Image" />
                                                <div class="img-overlay bg-dark"></div>
                                            </div>
                                        </div>
                                        <!--end col-->
                
                                        <div class="col-12">
                                            <div class="mt-4 pt-2 text-right">
                                                <a href="javascript:void(0)" class="btn btn-info">Read More <i class="mdi mdi-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                                <img src="https://www.bootdey.com/image/337x450/87CEFA/000000" class="img-fluid" alt="Image" />
                                                <div class="img-overlay bg-dark"></div>
                                            </div>
                                        </div>
                                        <!--end col-->
                
                                        <div class="col-lg-12 col-md-12 mt-4 pt-2">
                                            <div class="card work-desk rounded border-0 shadow-lg overflow-hidden">
                                                <img src="https://www.bootdey.com/image/600x401/FF7F50/000000" class="img-fluid" alt="Image" />
                                                <div class="img-overlay bg-dark"></div>
                                            </div>
                                        </div>
                                        <!--end col-->
                                    </div>
                                    <!--end row-->
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end col-->
                
                        <div class="col-lg-6 col-md-6 col-12 order-1 order-md-2">
                            <div class="section-title ml-lg-5">
                                <h5 class="text-custom font-weight-normal mb-3">About Us</h5>
                                <h4 class="title mb-4">
                                    Our mission is to <br />
                                    make your life easier.
                                </h4>
                                <p class="text-muted mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit quod debitis praesentium pariatur temporibus ipsa, cum quidem obcaecati sunt?</p>
                
                                <div class="row">
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="media align-items-center rounded shadow p-3">
                                            <i class="fa fa-play h4 mb-0 text-custom"></i>
                                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Responsive</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="media align-items-center rounded shadow p-3">
                                            <i class="fa fa-file-download h4 mb-0 text-custom"></i>
                                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Free Download</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="media align-items-center rounded shadow p-3">
                                            <i class="fa fa-user h4 mb-0 text-custom"></i>
                                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Support</a></h6>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="media align-items-center rounded shadow p-3">
                                            <i class="fa fa-image h4 mb-0 text-custom"></i>
                                            <h6 class="ml-3 mb-0"><a href="javascript:void(0)" class="text-dark">Development</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--enr row-->
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
