@extends('layout.principal')

@section('title', 'Demonstração - Cozinha da Lia')

@section('content')

<style>

    body {
        background: #eeeeee !important;
    }

    .demo-page {
        min-height: 100vh;
        background:
            linear-gradient(rgba(0,0,0,.30), rgba(0,0,0,.30)),
            url('/images/refeitorio.jpg') center/cover fixed;
        padding-bottom: 50px;
    }

    

    .topo-senai {
        height: 75px;
        background: rgba(255,255,255,.92);
        border-bottom: 6px solid #e5231b;
    }

    .senai-logo {
        color: #e5231b;
        font-family: Georgia, serif;
        font-size: 42px;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .titulo-demo {
        color: white;
        font-family: Georgia, serif;
        font-size: 45px;
        text-shadow: 2px 2px 5px #000;
    }

    

    .sistema {
        max-width: 700px;
        margin: 120px auto 0;
        background: #eef4fa;
        border-radius: 8px;
        box-shadow: 0 12px 35px rgba(0,0,0,.35);
        overflow: hidden;
    }

    

    .barra-sistema {
        background: white;
        border-bottom: 1px solid #d7dfe8;
        padding: 10px 15px;
    }

    .logo-sesi {
        background: #1769aa;
        color: white;
        font-weight: bold;
        padding: 4px 9px;
        font-size: 18px;
    }

    .nome-sistema {
        font-size: 13px;
        font-weight: 600;
        color: #333;
    }

    .usuario {
        background: #f0f3f6;
        border-radius: 20px;
        padding: 6px 12px;
        font-size: 11px;
        color: #555;
    }

    

    .conteudo-sistema {
        padding: 20px;
    }

    .card-sistema {
        background: white;
        border: 1px solid #dbe1e7;
        border-radius: 7px;
        box-shadow: 0 2px 5px rgba(0,0,0,.05);
        margin-bottom: 15px;
    }

    .card-header-sistema {
        padding: 13px 15px;
        border-bottom: 1px solid #e5e8eb;
        font-weight: 600;
        font-size: 13px;
        color: #333;
    }

    .card-body-sistema {
        padding: 15px;
    }

    .icone-card {
        width: 36px;
        height: 36px;
        border-radius: 7px;
        background: #e9f1f8;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #1769aa;
        font-size: 18px;
    }

    .cardapio-texto {
        font-size: 11px;
        color: #555;
    }

    .cardapio-principal {
        font-weight: bold;
        color: #222;
        font-size: 12px;
    }

    

    .form-label {
        font-size: 11px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .form-select {
        font-size: 11px;
        height: 38px;
    }

    .btn-troca {
        background: #4285c5;
        border: none;
        color: white;
        font-size: 11px;
        border-radius: 20px;
        padding: 9px 18px;
    }

    .btn-troca:hover {
        background: #276ca9;
        color: white;
    }

    

    .pedido {
        border-bottom: 1px solid #eeeeee;
        padding: 10px 0;
        font-size: 10px;
    }

    .pedido:last-child {
        border-bottom: none;
    }

    .pedido-nome {
        font-weight: 600;
        color: #333;
    }

    .pedido-data {
        color: #777;
        margin-top: 3px;
    }

    .status {
        font-size: 9px;
        border-radius: 20px;
        padding: 5px 9px;
    }

    .status-pendente {
        background: #fff3cd;
        color: #856404;
    }

    .status-aprovado {
        background: #d1e7dd;
        color: #0f5132;
    }

    .status-recusado {
        background: #f8d7da;
        color: #842029;
    }

    

    .rodape-demo {
        text-align: center;
        color: white;
        font-size: 10px;
        margin-top: 18px;
        text-shadow: 1px 1px 3px #000;
    }

    @media(max-width: 768px) {

        .senai-logo {
            font-size: 28px;
        }

        .titulo-demo {
            font-size: 28px;
        }

        .sistema {
            margin: 70px 15px 0;
        }

    }

</style>


<div class="demo-page">

    

    <div class="topo-senai">

        <div class="container-fluid px-4 h-100">

            <div class="d-flex align-items-center justify-content-between h-100">

                <div class="senai-logo">
                    SENAI-SP
                </div>

                <div class="titulo-demo">
                    Demonstração
                </div>

            </div>

        </div>

    </div>




    <div class="sistema">

        

        <div class="barra-sistema">

            <div class="d-flex align-items-center justify-content-between">

                <div class="d-flex align-items-center gap-3">

                    <span class="logo-sesi">
                        SESI
                    </span>

                    <span class="nome-sistema">
                        Cozinha da Lia - Solicitação de Substituição
                    </span>

                </div>

                <div class="usuario">
                    Aluno
                </div>

            </div>

        </div>


        <div class="conteudo-sistema">


            

            <div class="card-sistema">

                <div class="card-body-sistema">

                    <div class="d-flex align-items-start gap-3">

                        <div class="icone-card">
                            🍽
                        </div>

                        <div>

                            <div class="cardapio-principal">
                                Cardápio do Dia
                            </div>

                            <div class="cardapio-texto">
                                Proteína principal: Frango Grelhado
                            </div>

                            <div class="cardapio-texto">
                                Acompanhamentos: Arroz, Feijão e Salada
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            

            <div class="card-sistema">

                <div class="card-header-sistema">
                    Solicitar Nova Substituição
                </div>

                <div class="card-body-sistema">

                    <div class="row align-items-end g-3">

                        <div class="col-md-8">

                            <label class="form-label">
                                Selecione uma substituição
                            </label>

                            <select class="form-select">

                                <option selected>
                                    Selecione uma opção
                                </option>

                                <option>
                                    Carne Assada
                                </option>

                                <option>
                                    Omelete de Queijo
                                </option>

                                <option>
                                    Peixe Empanado
                                </option>

                                <option>
                                    Opção Vegetariana
                                </option>

                            </select>

                        </div>

                        <div class="col-md-4">

                            <button
                                type="button"
                                class="btn btn-troca w-100"
                                id="solicitar-troca">

                                + Solicitar Troca

                            </button>

                        </div>

                    </div>

                </div>

            </div>


            

            <div class="card-sistema">

                <div class="card-header-sistema">
                    Meus Pedidos Recentes
                </div>

                <div class="card-body-sistema">


            

                    <div class="pedido">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <div class="pedido-nome">
                                    Solicitação #123
                                </div>

                                <div class="pedido-data">
                                    Substituição: Omelete
                                </div>

                            </div>

                            <span class="status status-pendente">
                                Pendente
                            </span>

                        </div>

                    </div>


                    

                    <div class="pedido">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <div class="pedido-nome">
                                    Solicitação #119
                                </div>

                                <div class="pedido-data">
                                    Substituição: Carne Assada
                                </div>

                            </div>

                            <span class="status status-aprovado">
                                Aprovado
                            </span>

                        </div>

                    </div>


                    

                    <div class="pedido">

                        <div class="d-flex justify-content-between align-items-center">

                            <div>

                                <div class="pedido-nome">
                                    Solicitação #112
                                </div>

                                <div class="pedido-data">
                                    Substituição: Peixe Empanado
                                </div>

                            </div>

                            <span class="status status-recusado">
                                Recusado
                            </span>

                        </div>

                    </div>


                </div>

            </div>


        </div>

    </div>


    

    <div class="rodape-demo">

        Cozinha da Lia · Sistema de demonstração

    </div>

</div>

<script>
    document.getElementById('solicitar-troca').addEventListener('click', function () {
        this.textContent = 'Mensagem enviada à Lia';
        this.disabled = true;
    });
</script>

@endsection