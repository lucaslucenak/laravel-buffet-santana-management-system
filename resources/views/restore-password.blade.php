@extends('layouts.app-layout')
@section('content')
    <section class="vh-100" style="background: linear-gradient(to right, rgb(254, 179, 7), rgb(249, 204, 51));">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="https://i.pinimg.com/736x/e5/02/6c/e5026cb54a29f9c58009022f32bc2509.jpg"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="GET">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">BUFFET SANTANA</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Recuperação de senha
                                        </h5>
                                        
                                        <h5 class="fw-normal mb-3 pb-3">Será enviado um e-mail com as instruções necessárias para a recuperação de sua senha.
                                        </h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form2Example17"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="form2Example17">Seu e-mail cadastrado</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <a class="btn btn-dark btn-lg btn-block confirm-delete-link" data-toggle="modal" data-target="#confirmDeleteModal" data-item-id="1" style="color:white">Enviar</a>
                                        </div>
                                        <x-confirm-email-sent-modal>
                                            @slot('description')
                                            Um e-mail com todas as intruções para a recuperação de senha foi enviado para "lucas.lucenak@gmail.com"
                                            @endslot
                                            @slot('href')
                                            /sign-in
                                            @endslot
                                        </x-confirm-email-sent-modal>
                                        <a class="small text-muted" href="/sign-in">Voltar</a>
                                        <a href="#!" class="small text-muted"> | Termos de uso</a>
                                        <a href="#!" class="small text-muted"> | Política de privacidade</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
