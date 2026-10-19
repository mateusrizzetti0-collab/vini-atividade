@extends('layout.principal')

@section('title', 'Cardápio da Lia')

@section('content')

<style>
    body {
        background: #171312 !important;
    }

    .cardapio-container {
        max-width: 1100px;
        margin: 0 auto;
        background: #4b1f10;
        min-height: 100vh;
        padding: 35px 40px;
        color: #f4dfc4;
    }

    .titulo-cardapio {
        font-family: Georgia, serif;
        color: #f3d7b0;
        font-size: 42px;
        letter-spacing: 1px;
        margin-bottom: 0;
    }

    .subtitulo {
        color: #d9a66d;
        font-family: Georgia, serif;
        font-size: 25px;
    }

    .linha-titulo {
        width: 45px;
        height: 2px;
        background: #c88b4a;
        display: inline-block;
        vertical-align: middle;
        margin: 0 8px;
    }

    .texto-dia {
        color: #e5c49d;
        font-size: 11px;
        vertical-align: middle;
    }

    .descricao-topo {
        color: #e2c4a0;
        font-size: 11px;
    }

    .prato-card {
        background: #5b2615;
        border: none;
        border-radius: 13px;
        overflow: hidden;
        height: 100%;
        box-shadow: 0 5px 12px rgba(0,0,0,.20);
        transition: .2s;
    }

    .prato-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 18px rgba(0,0,0,.30);
    }

    .prato-img {
        width: 100%;
        height: 125px;
        object-fit: cover;
        display: block;
    }

    .prato-conteudo {
        padding: 12px 14px;
    }

    .prato-nome {
        color: #f2d5b2;
        font-family: Georgia, serif;
        font-size: 17px;
        margin-bottom: 4px;
    }

    .prato-tipo {
        color: #d7b38a;
        font-size: 10px;
        margin-bottom: 0;
    }

    .divisoria {
        height: 1px;
        background: #87502f;
        border: 0;
        opacity: 1;
        margin: 22px 0;
    }

    .rodape {
        border-top: 1px solid #87502f;
        margin-top: 28px;
        padding-top: 20px;
        color: #d8b793;
        font-size: 10px;
    }

    .senai {
        color: #ff321c;
        font-weight: bold;
        font-size: 12px;
    }

    .logo-chef {
        font-size: 25px;
        color: #e3b36f;
    }

    .botao-receita {
        background: transparent;
        border: 1px solid #c98a4d;
        color: #e6c39a;
        font-size: 10px;
        padding: 4px 9px;
        margin-top: 7px;
    }

    .botao-receita:hover {
        background: #c98a4d;
        color: #3d190d;
    }

    @media (max-width: 768px) {

        .cardapio-container {
            padding: 25px 18px;
        }

        .titulo-cardapio {
            font-size: 32px;
        }

        .subtitulo {
            font-size: 21px;
        }

        .prato-img {
            height: 180px;
        }
    }
</style>


<div class="cardapio-container">

    

    <div class="text-center mb-4">

        <div class="logo-chef mb-1">
            ♨
        </div>

        <h1 class="titulo-cardapio">
            Cozinha
        </h1>

        <div class="subtitulo">
            da Lia ♡
        </div>

        <div class="mt-2">
            <span class="linha-titulo"></span>

            <span class="texto-dia">
                CARDÁPIO DO DIA
            </span>

            <span class="linha-titulo"></span>
        </div>

    </div>


    

    <div class="row text-center mb-4">

        <div class="col-md-4 offset-md-1">
            <p class="descricao-topo mb-0">
                Aqui tem comida boa,
                <br>
                feita com carinho!
            </p>
        </div>

        <div class="col-md-4 offset-md-2">
            <p class="descricao-topo mb-0">
                Sabor caseiro
                <br>
                em cada refeição!
            </p>
        </div>

    </div>


    
    <div class="row g-3">

        

        <div class="col-12 col-md-4">

            <div class="prato-card">

                <img
                    src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=700&q=80"
                    class="prato-img"
                    alt="Feijão Carioca">

                <div class="prato-conteudo">

                    <h3 class="prato-nome">
                        Feijão Carioca
                    </h3>

                    <p class="prato-tipo">
                        • Prato tradicional
                    </p>

                    <a href="{{ route('receitas') }}"
                       class="btn botao-receita">
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


        

        <div class="col-12 col-md-4">

            <div class="prato-card">

                <img
                    src="https://images.unsplash.com/photo-1598103442097-8b74394b95c6?auto=format&fit=crop&w=700&q=80"
                    class="prato-img"
                    alt="Frango Assado">

                <div class="prato-conteudo">

                    <h3 class="prato-nome">
                        Frango Assado
                    </h3>

                    <p class="prato-tipo">
                        • Prato principal
                    </p>

                    <a href="{{ route('receitas') }}"
                       class="btn botao-receita">
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


        

        <div class="col-12 col-md-4">

            <div class="prato-card">

                <img
                    src="https://images.unsplash.com/photo-1532550907401-a500c9a57435?auto=format&fit=crop&w=700&q=80"
                    class="prato-img"
                    alt="Frango Grelhado">

                <div class="prato-conteudo">

                    <h3 class="prato-nome">
                        Frango Grelhado
                    </h3>

                    <p class="prato-tipo">
                        • Prato principal
                    </p>

                    <a href="{{ route('receitas') }}"
                       class="btn botao-receita">
                        Ver receita
                    </a>

                </div>

            </div>

        </div>

    </div>


    <hr class="divisoria">


    

    <div class="row g-3">

        

        <div class="col-12 col-md-4">

            <div class="prato-card">

                <img
                    src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=700&q=80"
                    class="prato-img"
                    alt="Carnes">

                <div class="prato-conteudo">

                    <h3 class="prato-nome">
                        Carnes
                    </h3>

                    <p class="prato-tipo">
                        • Prato principal
                    </p>

                    <a href="{{ route('receitas') }}"
                       class="btn botao-receita">
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


        

        <div class="col-12 col-md-4">

            <div class="prato-card">

                <img
                    src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?auto=format&fit=crop&w=700&q=80"
                    class="prato-img"
                    alt="Feijão Preto">

                <div class="prato-conteudo">

                    <h3 class="prato-nome">
                        Feijão Preto
                    </h3>

                    <p class="prato-tipo">
                        • Acompanhamento
                    </p>

                    <a href="{{ route('receitas') }}"
                       class="btn botao-receita">
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


        

        <div class="col-12 col-md-4">

            <div class="prato-card">

                <img
                    src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=700&q=80"
                    class="prato-img"
                    alt="Macarrão">

                <div class="prato-conteudo">

                    <h3 class="prato-nome">
                        Macarrão
                    </h3>

                    <p class="prato-tipo">
                        • Prato principal
                    </p>

                    <a href="{{ route('receitas') }}"
                       class="btn botao-receita">
                        Ver receita
                    </a>

                </div>

            </div>

        </div>

    </div>




    <div class="rodape">

        <div class="row align-items-center">

            <div class="col-md-6">

                <span class="senai">
                    SENAI-SP
                </span>

                <span class="ms-2">
                    | Cozinha da Lia
                </span>

            </div>

            <div class="col-md-6 text-md-end mt-2 mt-md-0">

                Cardápio sujeito a alterações conforme disponibilidade.

            </div>

        </div>

    </div>

</div>

@endsection