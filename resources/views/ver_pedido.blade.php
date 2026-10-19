@extends('layout.principal')

@section('title', 'Ver Pedido - Cozinha da Lia')

@section('content')

<div class="container py-5">

  
    <div class="text-center py-5 mb-4">

        <span class="badge rounded-pill text-bg-warning px-4 py-2 mb-3">
            COZINHA DA LIA
        </span>

        <h1 class="display-5 fw-bold mb-3">
            Detalhes do seu pedido
        </h1>

        <p class="lead text-body-secondary">
            Confira todas as informações sobre o seu pedido.
        </p>

    </div>


    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">

                <div>

                    <small class="text-body-secondary">
                        Número do pedido
                    </small>

                    <h4 class="fw-bold mb-0">
                        #00125
                    </h4>

                </div>

                <div class="text-end">

                    <small class="text-body-secondary d-block">
                        Status do pedido
                    </small>

                    <span class="badge text-bg-warning px-3 py-2">
                        Em preparação
                    </span>

                </div>

            </div>

        </div>

    </div>


    
    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body p-4 p-lg-5">

            <h5 class="fw-bold mb-4">
                Acompanhe seu pedido
            </h5>

            <div class="row text-center">

                <div class="col-4">

                    <div class="rounded-circle bg-success text-white
                                d-flex align-items-center justify-content-center
                                mx-auto mb-2"
                         style="width: 50px; height: 50px;">

                        ✓

                    </div>

                    <small class="fw-bold">
                        Pedido recebido
                    </small>

                </div>


                <div class="col-4">

                    <div class="rounded-circle bg-warning text-dark
                                d-flex align-items-center justify-content-center
                                mx-auto mb-2"
                         style="width: 50px; height: 50px;">

                        2

                    </div>

                    <small class="fw-bold">
                        Em preparação
                    </small>

                </div>


                <div class="col-4">

                    <div class="rounded-circle bg-secondary text-white
                                d-flex align-items-center justify-content-center
                                mx-auto mb-2"
                         style="width: 50px; height: 50px;">

                        3

                    </div>

                    <small class="text-body-secondary">
                        Pedido concluído
                    </small>

                </div>

            </div>

        </div>

    </div>


    <div class="card border-0 shadow-sm mb-4">

        <div class="card-body p-4 p-lg-5">

            <span class="badge text-bg-warning mb-3">
                Seu pedido
            </span>

            <h3 class="fw-bold mb-4">
                Refeição escolhida
            </h3>


            
            <div class="border rounded-3 p-3 mb-3">

                <div class="d-flex justify-content-between">

                    <div>

                        <h5 class="fw-bold mb-1">
                            Frango Grelhado
                        </h5>

                        <p class="text-body-secondary mb-0">
                            Prato principal
                        </p>

                    </div>

                    <span class="badge text-bg-warning align-self-start">
                        1x
                    </span>

                </div>

            </div>


            <div class="border rounded-3 p-3 mb-3">

                <div class="d-flex justify-content-between">

                    <div>

                        <h5 class="fw-bold mb-1">
                            Arroz e Feijão
                        </h5>

                        <p class="text-body-secondary mb-0">
                            Acompanhamento
                        </p>

                    </div>

                    <span class="badge text-bg-secondary align-self-start">
                        1x
                    </span>

                </div>

            </div>


            <div class="border rounded-3 p-3 mb-3">

                <div class="d-flex justify-content-between">

                    <div>

                        <h5 class="fw-bold mb-1">
                            Salada
                        </h5>

                        <p class="text-body-secondary mb-0">
                            Salada fresca
                        </p>

                    </div>

                    <span class="badge text-bg-success align-self-start">
                        1x
                    </span>

                </div>

            </div>


            <div class="border rounded-3 p-3 mb-3">

                <div class="d-flex justify-content-between">

                    <div>

                        <h5 class="fw-bold mb-1">
                            Suco de Laranja
                        </h5>

                        <p class="text-body-secondary mb-0">
                            Bebida
                        </p>

                    </div>

                    <span class="badge text-bg-secondary align-self-start">
                        1x
                    </span>

                </div>

            </div>


            <div class="border rounded-3 p-3">

                <div class="d-flex justify-content-between">

                    <div>

                        <h5 class="fw-bold mb-1">
                            Bolo
                        </h5>

                        <p class="text-body-secondary mb-0">
                            Sobremesa
                        </p>

                    </div>

                    <span class="badge text-bg-info align-self-start">
                        1x
                    </span>

                </div>

            </div>

        </div>

    </div>


    <div class="row g-4 mb-4">

        <div class="col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <h5 class="fw-bold mb-3">
                        Data do pedido
                    </h5>

                    <p class="text-body-secondary mb-0">
                        05/10/2026 às 08:00
                    </p>

                </div>

            </div>

        </div>


        <div class="col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <h5 class="fw-bold mb-3">
                        Observações
                    </h5>

                    <p class="text-body-secondary mb-0">
                        Pedido preparado normalmente, sem observações.
                    </p>

                </div>

            </div>

        </div>

    </div>


    <div class="card border-0 shadow-sm mb-5">

        <div class="card-body p-4 p-lg-5">

            <h4 class="fw-bold mb-4">
                Resumo do pedido
            </h4>

            <div class="d-flex justify-content-between mb-2">

                <span class="text-body-secondary">
                    Prato principal
                </span>

                <strong>
                    1
                </strong>

            </div>

            <div class="d-flex justify-content-between mb-2">

                <span class="text-body-secondary">
                    Acompanhamento
                </span>

                <strong>
                    1
                </strong>

            </div>

            <div class="d-flex justify-content-between mb-2">

                <span class="text-body-secondary">
                    Salada
                </span>

                <strong>
                    1
                </strong>

            </div>

            <div class="d-flex justify-content-between mb-2">

                <span class="text-body-secondary">
                    Bebida
                </span>

                <strong>
                    1
                </strong>

            </div>

            <div class="d-flex justify-content-between mb-4">

                <span class="text-body-secondary">
                    Sobremesa
                </span>

                <strong>
                    1
                </strong>

            </div>

            <hr>

            <div class="d-flex justify-content-between">

                <h5 class="fw-bold">
                    Total de itens
                </h5>

                <h5 class="fw-bold">
                    5 itens
                </h5>

            </div>

        </div>

    </div>


    <div class="text-center pb-5">

        <a
            href="{{ url('/cardapio') }}"
            class="btn btn-warning px-4 me-2"
        >
            Voltar ao cardápio
        </a>

        <a
            href="{{ url('/') }}"
            class="btn btn-outline-secondary px-4"
        >
            Página inicial
        </a>

    </div>

</div>

@endsection