@extends('layout.principal')

@section('title', 'Cadastro de Usuário')

@section('content')

<div class="container-fluid min-vh-100 position-relative p-0">

    
    <div class="position-absolute top-0 start-0 w-100 h-100">
        <img src="{{ asset('img/cozinha.jpg') }}"
             class="w-100 h-100 object-fit-cover"
             alt="Cozinha da Lia">

        
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50"></div>
    </div>

    
    <div class="position-relative min-vh-100 text-white">

    
        <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3">

            <div class="container-fluid">

                <a class="navbar-brand fw-bold fs-1"
                   href="#">
                    SENAI-SP
                </a>

                <div class="d-flex align-items-center gap-4">

                    <a href="#"
                       class="text-white text-decoration-none">
                        INÍCIO
                    </a>

                    <a href="#"
                       class="text-white text-decoration-none">
                        SOBRE
                    </a>

                    <a href="#"
                       class="btn btn-outline-light rounded-pill px-4">
                        LOGIN
                    </a>

                </div>

            </div>

        </nav>


        
        <div class="container-fluid">

            <div class="row align-items-center min-vh-75">

                
                <div class="col-lg-7 px-5">

                    <small class="fw-bold">
                        COZINHA DA LIA
                    </small>

                    <div class="border-top border-3 border-white mt-3 mb-4"
                         style="max-width: 70px;">
                    </div>

                    <h1 class="display-1 fw-bold">
                        CADASTRO
                        <br>
                        COZINHA
                        <br>
                        INTELIGENTE LIA
                    </h1>

                    <p class="fs-5 col-lg-8">
                        Crie sua conta para acessar o ambiente
                        da Cozinha da Lia e acompanhar suas
                        atividades de forma rápida e segura.
                    </p>

                </div>


            
                <div class="col-lg-4 px-4">

                    <div class="card border-0 shadow-lg rounded-4 bg-light bg-opacity-95">

                        <div class="card-body p-4">

                            <h2 class="fw-bold text-dark mb-2">
                                Criar sua conta
                            </h2>

                            <p class="text-secondary small mb-4">
                                Preencha seus dados para realizar
                                seu cadastro na Cozinha da Lia.
                            </p>


                            <div class="row g-3">

                                
                                <div class="col-12">

                                    <label for="nome"
                                           class="form-label text-dark fw-semibold">
                                        Nome
                                    </label>

                                    <input type="text"
                                           class="form-control form-control-lg"
                                           id="nome"
                                           name="nome"
                                           placeholder="Digite seu nome">

                                </div>


                                
                                <div class="col-12">

                                    <label for="email"
                                           class="form-label text-dark fw-semibold">
                                        E-mail
                                    </label>

                                    <input type="email"
                                           class="form-control form-control-lg"
                                           id="email"
                                           name="email"
                                           placeholder="Digite seu e-mail">

                                </div>


                                
                                <div class="col-md-6">

                                    <label for="cpf"
                                           class="form-label text-dark fw-semibold">
                                        CPF
                                    </label>

                                    <input type="text"
                                           class="form-control"
                                           maxlength="11"
                                           id="cpf"
                                           name="cpf"
                                           placeholder="Digite seu CPF">

                                </div>


                                
                                <div class="col-md-6">

                                    <label for="data_nascimento"
                                           class="form-label text-dark fw-semibold">
                                        Data de nascimento
                                    </label>

                                    <input type="date"
                                           class="form-control"
                                           id="data_nascimento"
                                           name="data_nascimento">

                                </div>


                                
                                <div class="col-md-6">

                                    <label for="senha"
                                           class="form-label text-dark fw-semibold">
                                        Senha
                                    </label>

                                    <input type="password"
                                           class="form-control"
                                           id="senha"
                                           name="senha"
                                           placeholder="Digite sua senha">

                                </div>


                            
                                <div class="col-md-6">

                                    <label for="confirmar_senha"
                                           class="form-label text-dark fw-semibold">
                                        Confirmar senha
                                    </label>

                                    <input type="password"
                                           class="form-control"
                                           id="confirmar_senha"
                                           name="confirmar_senha"
                                           placeholder="Confirme sua senha">

                                </div>


                            
                                <div class="col-12 mt-4">

                                    <a href="{{ route('cardapio') }}"
                                       class="btn btn-danger btn-lg w-100 rounded-3 fw-bold">
                                        Cadastrar
                                    </a>

                                </div>


                                
                                <div class="col-12 text-center">

                                    <small class="text-secondary">
                                        Já possui uma conta?
                                    </small>

                                    <a href="#"
                                       class="text-danger text-decoration-none fw-bold">
                                        Entrar
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection