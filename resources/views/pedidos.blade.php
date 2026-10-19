@extends('layout.principal')

@section('title', 'Pedidos - Cozinha da Lia')

@section('content')

<div class="w-100 min-vh-100 bg-light">

    <div class="container-fluid px-4 px-lg-5 py-5">


        <div class="d-flex justify-content-between align-items-center mb-5">

            <div>

                <span class="badge rounded-pill text-bg-warning px-3 py-2 mb-3">
                    COZINHA DA LIA
                </span>

                <h1 class="fw-bold mb-2">
                    Pedidos realizados
                </h1>

                <p class="text-secondary mb-0">
                    Acompanhe os pedidos realizados, pendentes e concluídos da sua cozinha.
                </p>

            </div>

            <button class="btn btn-dark px-4 py-3">
                Novo pedido
            </button>

        </div>


        
        <div class="row g-4 mb-5">

            <div class="col-12 col-md-6 col-xl-3">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <p class="text-secondary mb-2">
                            Pedidos no mês
                        </p>

                        <h2 class="fw-bold mb-3">
                            24
                        </h2>

                        <p class="text-success mb-0">
                            3 pedidos este mês
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-12 col-md-6 col-xl-3">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <p class="text-secondary mb-2">
                            Pedidos pendentes
                        </p>

                        <h2 class="fw-bold mb-3">
                            12
                        </h2>

                        <p class="text-warning mb-0">
                            Aguardando preparo
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-12 col-md-6 col-xl-3">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <p class="text-secondary mb-2">
                            Em andamento
                        </p>

                        <h2 class="fw-bold mb-3">
                            8
                        </h2>

                        <p class="text-info mb-0">
                            Preparando agora
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-12 col-md-6 col-xl-3">

                <div class="card border-0 shadow-sm rounded-4 h-100">

                    <div class="card-body p-4">

                        <p class="text-secondary mb-2">
                            Pedidos concluídos
                        </p>

                        <h2 class="fw-bold mb-3">
                            28
                        </h2>

                        <p class="text-success mb-0">
                            Pedidos entregues
                        </p>

                    </div>

                </div>

            </div>

        </div>


     
        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center mb-4">

                    <div>

                        <h3 class="fw-bold mb-1">
                            Histórico recente
                        </h3>

                        <p class="text-secondary mb-0">
                            Confira os pedidos realizados recentemente.
                        </p>

                    </div>

                    <div class="d-flex gap-2">

                        <button class="btn btn-dark btn-sm">
                            Todos
                        </button>

                        <button class="btn btn-outline-warning btn-sm">
                            Pendentes
                        </button>

                        <button class="btn btn-outline-info btn-sm">
                            Em andamento
                        </button>

                        <button class="btn btn-outline-success btn-sm">
                            Concluídos
                        </button>

                    </div>

                </div>


            
                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-light">

                            <tr>

                                <th class="py-3">
                                    Cliente
                                </th>

                                <th class="py-3">
                                    Refeição
                                </th>

                                <th class="py-3">
                                    Data
                                </th>

                                <th class="py-3">
                                    Status
                                </th>

                                <th class="py-3 text-end">
                                    Ação
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            <tr>

                                <td>
                                    <strong>Cliente 01</strong>
                                </td>

                                <td>
                                    Frango assado
                                    <br>
                                    <small class="text-secondary">
                                        3 itens
                                    </small>
                                </td>

                                <td>
                                    30/09/2026
                                </td>

                                <td>

                                    <span class="badge rounded-pill text-bg-warning px-3 py-2">
                                        Pendente
                                    </span>

                                </td>

                                <td class="text-end">

                                    <a href="{{ route('ver_pedido') }}"
                                       class="btn btn-outline-dark btn-sm px-3">
                                        Ver pedido
                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Cliente 02</strong>
                                </td>

                                <td>
                                    Macarrão
                                    <br>
                                    <small class="text-secondary">
                                        2 itens
                                    </small>
                                </td>

                                <td>
                                    30/09/2026
                                </td>

                                <td>

                                    <span class="badge rounded-pill text-bg-info px-3 py-2">
                                        Em andamento
                                    </span>

                                </td>

                                <td class="text-end">

                                    <a href="{{ route('ver_pedido') }}"
                                       class="btn btn-outline-dark btn-sm px-3">
                                        Ver pedido
                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Cliente 03</strong>
                                </td>

                                <td>
                                    Feijão carioca
                                    <br>
                                    <small class="text-secondary">
                                        4 itens
                                    </small>
                                </td>

                                <td>
                                    29/09/2026
                                </td>

                                <td>

                                    <span class="badge rounded-pill text-bg-success px-3 py-2">
                                        Concluído
                                    </span>

                                </td>

                                <td class="text-end">

                                    <a href="{{ route('ver_pedido') }}"
                                       class="btn btn-outline-dark btn-sm px-3">
                                        Ver pedido
                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Cliente 04</strong>
                                </td>

                                <td>
                                    Frango grelhado
                                    <br>
                                    <small class="text-secondary">
                                        3 itens
                                    </small>
                                </td>

                                <td>
                                    29/09/2026
                                </td>

                                <td>

                                    <span class="badge rounded-pill text-bg-success px-3 py-2">
                                        Concluído
                                    </span>

                                </td>

                                <td class="text-end">

                                    <a href="{{ route('ver_pedido') }}"
                                       class="btn btn-outline-dark btn-sm px-3">
                                        Ver pedido
                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Cliente 05</strong>
                                </td>

                                <td>
                                    Carne assada
                                    <br>
                                    <small class="text-secondary">
                                        5 itens
                                    </small>
                                </td>

                                <td>
                                    28/09/2026
                                </td>

                                <td>

                                    <span class="badge rounded-pill text-bg-warning px-3 py-2">
                                        Pendente
                                    </span>

                                </td>

                                <td class="text-end">

                                    <a href="{{ route('ver_pedido') }}"
                                       class="btn btn-outline-dark btn-sm px-3">
                                        Ver pedido
                                    </a>

                                </td>

                            </tr>


                            <tr>

                                <td>
                                    <strong>Cliente 06</strong>
                                </td>

                                <td>
                                    Feijão preto
                                    <br>
                                    <small class="text-secondary">
                                        4 itens
                                    </small>
                                </td>

                                <td>
                                    28/09/2026
                                </td>

                                <td>

                                    <span class="badge rounded-pill text-bg-success px-3 py-2">
                                        Concluído
                                    </span>

                                </td>

                                <td class="text-end">

                                    <a href="{{ route('ver_pedido') }}"
                                       class="btn btn-outline-dark btn-sm px-3">
                                        Ver pedido
                                    </a>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        <div class="text-center py-5">

            <h5 class="fw-bold">
                Cozinha da Lia
            </h5>

            <p class="text-secondary mb-0">
                Controle de pedidos e refeições
            </p>

        </div>

    </div>

</div>

@endsection