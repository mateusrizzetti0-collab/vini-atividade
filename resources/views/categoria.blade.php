@extends('layout.principal')

@section('title', 'Categoria - Cozinha da Lia')

@section('content')

<div class="w-100 min-vh-100 bg-light">

    <div class="container-fluid px-4 px-lg-5 py-4">

        
        <div class="mb-4">

            <div class="d-flex align-items-center gap-2 mb-2">

                <span class="badge rounded-3 text-bg-success px-3 py-2">
                    COZINHA DA LIA
                </span>

            </div>

            <h1 class="fw-semibold mb-1">
                Ingredientes Disponíveis
            </h1>

            <p class="text-secondary mb-0">
                Consulte os ingredientes disponíveis e acompanhe o estoque da cozinha.
            </p>

        </div>


        <div class="row g-3 mb-4">

         
            <div class="col-12 col-md-4">

                <div class="card border-0 shadow-sm rounded-3 h-100">

                    <div class="card-body p-4">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <small class="text-secondary">
                                    Total de ingredientes
                                </small>

                                <h2 class="fw-bold mb-1">
                                    10
                                </h2>

                                <small class="text-secondary">
                                    Ingredientes cadastrados
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


           
            <div class="col-12 col-md-4">

                <div class="card border-0 shadow-sm rounded-3 h-100">

                    <div class="card-body p-4">

                        <small class="text-secondary">
                            Ingredientes disponíveis
                        </small>

                        <h2 class="fw-bold mb-1 text-success">
                            8
                        </h2>

                        <small class="text-secondary">
                            Estoque disponível
                        </small>

                    </div>

                </div>

            </div>


         
            <div class="col-12 col-md-4">

                <div class="card border-0 shadow-sm rounded-3 h-100">

                    <div class="card-body p-4">

                        <small class="text-secondary">
                            Estoque baixo
                        </small>

                        <h2 class="fw-bold mb-1 text-warning">
                            2
                        </h2>

                        <small class="text-secondary">
                            Precisam de reposição
                        </small>

                    </div>

                </div>

            </div>

        </div>


   
        <div class="card border-0 shadow-sm rounded-3">

            <div class="card-body p-4">

              
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center mb-4">

                    <div>

                        <h4 class="fw-semibold mb-1">
                            Inventário atual
                        </h4>

                        <p class="text-secondary mb-0">
                            Lista dos ingredientes disponíveis na cozinha.
                        </p>

                    </div>

                    <div class="mt-3 mt-md-0">

                        <button class="btn btn-success">
                            Adicionar ingrediente
                        </button>

                    </div>

                </div>


                
                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-success">

                            <tr>

                                <th class="py-3">
                                    Nome do ingrediente
                                </th>

                                <th class="py-3">
                                    Quantidade disponível
                                </th>

                                <th class="py-3">
                                    Unidade
                                </th>

                                <th class="py-3">
                                    Categoria
                                </th>

                                <th class="py-3">
                                    Status do estoque
                                </th>

                                <th class="py-3 text-center">
                                    Ações
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            
                            <tr>

                                <td class="fw-semibold">
                                    Arroz
                                </td>

                                <td>
                                    25
                                </td>

                                <td>
                                    kg
                                </td>

                                <td>
                                    Grãos
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                        Disponível
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                            
                            <tr>

                                <td class="fw-semibold">
                                    Feijão
                                </td>

                                <td>
                                    15
                                </td>

                                <td>
                                    kg
                                </td>

                                <td>
                                    Grãos
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                        Disponível
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                            
                            <tr>

                                <td class="fw-semibold">
                                    Frango
                                </td>

                                <td>
                                    12
                                </td>

                                <td>
                                    kg
                                </td>

                                <td>
                                    Carnes
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                        Disponível
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                            
                            <tr>

                                <td class="fw-semibold">
                                    Carne bovina
                                </td>

                                <td>
                                    8
                                </td>

                                <td>
                                    kg
                                </td>

                                <td>
                                    Carnes
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-warning-subtle text-warning px-3 py-2">
                                        Estoque baixo
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                        
                            <tr>

                                <td class="fw-semibold">
                                    Batata
                                </td>

                                <td>
                                    20
                                </td>

                                <td>
                                    kg
                                </td>

                                <td>
                                    Hortaliças
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                        Disponível
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                            
                            <tr>

                                <td class="fw-semibold">
                                    Tomate
                                </td>

                                <td>
                                    10
                                </td>

                                <td>
                                    kg
                                </td>

                                <td>
                                    Hortaliças
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                        Disponível
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                            
                            <tr>

                                <td class="fw-semibold">
                                    Cenoura
                                </td>

                                <td>
                                    8
                                </td>

                                <td>
                                    kg
                                </td>

                                <td>
                                    Hortaliças
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-warning-subtle text-warning px-3 py-2">
                                        Estoque baixo
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                            <tr>

                                <td class="fw-semibold">
                                    Leite
                                </td>

                                <td>
                                    20
                                </td>

                                <td>
                                    L
                                </td>

                                <td>
                                    Laticínios
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                        Disponível
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                            
                            <tr>

                                <td class="fw-semibold">
                                    Ovos
                                </td>

                                <td>
                                    120
                                </td>

                                <td>
                                    unidades
                                </td>

                                <td>
                                    Proteínas
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                        Disponível
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>


                            
                            <tr>

                                <td class="fw-semibold">
                                    Macarrão
                                </td>

                                <td>
                                    10
                                </td>

                                <td>
                                    kg
                                </td>

                                <td>
                                    Massas
                                </td>

                                <td>

                                    <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2">
                                        Disponível
                                    </span>

                                </td>

                                <td class="text-center">

                                    <button class="btn btn-sm btn-outline-success me-1">
                                        Editar
                                    </button>

                                    <button class="btn btn-sm btn-outline-danger">
                                        Excluir
                                    </button>

                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>


        

        <div class="text-center py-4">

            <small class="text-secondary">
                Cozinha da Lia — Controle de ingredientes
            </small>

        </div>

    </div>

</div>

@endsection