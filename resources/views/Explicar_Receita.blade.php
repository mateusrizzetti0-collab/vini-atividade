@extends('layout.principal')

@section('title', 'Explicação das Refeições')

@section('content')

<style>

    body {
        background: #171310 !important;
    }

    .pagina-receitas {
        background: #f5ead7;
        min-height: 100vh;
        color: #4d3023;
    }

  

    .cabecalho-receitas {
        background: #4b2112;
        color: #f3dfc4;
        padding: 28px 30px;
    }

    .cabecalho-receitas h1 {
        font-family: Georgia, serif;
        font-size: 38px;
        margin-bottom: 8px;
    }

    .cabecalho-receitas p {
        color: #d8b99a;
        font-size: 14px;
        margin: 0;
    }

    .marca {
        font-family: Georgia, serif;
        font-size: 18px;
        color: #f0d2ac;
    }

    .marca small {
        display: block;
        font-family: Arial, sans-serif;
        font-size: 10px;
        color: #cba98a;
        margin-top: 5px;
    }


    
    .conteudo-receitas {
        padding: 35px;
    }

    .titulo-secao {
        font-family: Georgia, serif;
        font-size: 20px;
        color: #4b2b1d;
        margin-bottom: 20px;
    }


   

    .card-receita {
        background: #fffaf2;
        border: 1px solid #dfcfb8;
        border-radius: 10px;
        overflow: hidden;
        height: 100%;
        transition: .2s;
    }

    .card-receita:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(70, 35, 20, .12);
    }

    .card-receita img {
        width: 100%;
        height: 175px;
        object-fit: cover;
    }

    .conteudo-card {
        padding: 18px;
    }

    .nome-receita {
        font-family: Georgia, serif;
        font-size: 21px;
        color: #4d2d20;
        margin-bottom: 8px;
    }

    .descricao {
        color: #765e4a;
        font-size: 12px;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .subtitulo {
        color: #9b4824;
        font-size: 9px;
        font-weight: bold;
        text-transform: uppercase;
        margin-bottom: 5px;
    }

    .texto-preparo {
        color: #725b48;
        font-size: 10px;
        line-height: 1.5;
        margin-bottom: 15px;
    }


   
    .btn-ver-receita {
        background: #4b2112;
        color: #f3dfc4;
        border: 1px solid #8f5533;
        border-radius: 20px;
        padding: 8px 20px;
        font-size: 11px;
        text-decoration: none;
        display: inline-block;
        transition: .2s;
    }

    .btn-ver-receita:hover {
        background: #6a2d17;
        color: white;
    }


    

    .area-receita-dia {
        background: #ead8bb;
        border-radius: 10px;
        padding: 25px;
        margin-top: 35px;
        text-align: center;
        border: 1px solid #dcc5a5;
    }

    .area-receita-dia h2 {
        font-family: Georgia, serif;
        color: #4b2b1d;
        font-size: 22px;
        margin-bottom: 7px;
    }

    .area-receita-dia p {
        color: #765e49;
        font-size: 11px;
        margin-bottom: 17px;
    }

    .btn-receita-dia {
        background: #4b2112;
        color: #f3dfc4;
        border: 1px solid #9b6038;
        border-radius: 25px;
        padding: 10px 30px;
        font-size: 12px;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: .2s;
    }

    .btn-receita-dia:hover {
        background: #6a2d17;
        color: #fff1dc;
        transform: translateY(-2px);
    }


    
    .rodape-receitas {
        border-top: 1px solid #d4bea0;
        padding: 15px 35px;
        color: #806953;
        font-size: 9px;
        background: #f5ead7;
    }

    .senai {
        color: #e5231b;
        font-weight: bold;
    }


   

    @media (max-width: 768px) {

        .cabecalho-receitas {
            padding: 25px 20px;
        }

        .cabecalho-receitas h1 {
            font-size: 30px;
        }

        .conteudo-receitas {
            padding: 20px;
        }

    }

</style>


<div class="pagina-receitas">


   
    <header class="cabecalho-receitas">

        <div class="container-fluid">

            <div class="row align-items-center">

                <div class="col-md-8">

                    <div class="marca mb-3">
                        COZINHA DA LIA
                    </div>

                    <h1>
                        Conheça as receitas
                        <br>
                        do nosso cardápio
                    </h1>

                    <p>
                        Um guia simples para conhecer os pratos
                        e seus preparos mais comuns.
                    </p>

                </div>

                <div class="col-md-4 text-md-end mt-4 mt-md-0">

                    <div class="marca">
                        Cozinha da Lia
                    </div>

                    <small>
                        Aqui tem comida boa,
                        feita com carinho!
                    </small>

                </div>

            </div>

        </div>

    </header>


    <main class="conteudo-receitas">

        <div class="container-fluid">


            <div class="d-flex justify-content-between align-items-center mb-4">

                <h2 class="titulo-secao mb-0">
                    Descrições gerais
                </h2>

                <small class="text-secondary">
                    Imagens ilustrativas · o prato servido pode variar
                </small>

            </div>


            

            <div class="row g-4">


            

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card-receita">

                        <img
                            src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=900&q=85"
                            alt="Feijão Carioca">

                        <div class="conteudo-card">

                            <h3 class="nome-receita">
                                Feijão Carioca
                            </h3>

                            <p class="descricao">
                                É um feijão de grãos claros e rajados,
                                geralmente servido com caldo.
                            </p>

                            <div class="subtitulo">
                                Como costuma ser preparado
                            </div>

                            <p class="texto-preparo">
                                Costuma ser cozido em água até os grãos
                                ficarem macios. Depois, o caldo pode ser
                                temperado conforme a receita da cozinha.
                            </p>

                            <a href="{{ route('receitas') }}"
                               class="btn-ver-receita">

                                Ver receita

                            </a>

                        </div>

                    </div>

                </div>


            

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card-receita">

                        <img
                            src="https://images.unsplash.com/photo-1598103442097-8b74394b95c6?auto=format&fit=crop&w=900&q=85"
                            alt="Frango Assado">

                        <div class="conteudo-card">

                            <h3 class="nome-receita">
                                Frango Assado
                            </h3>

                            <p class="descricao">
                                É o frango preparado no forno,
                                podendo ficar dourado por fora
                                e macio por dentro.
                            </p>

                            <div class="subtitulo">
                                Como costuma ser preparado
                            </div>

                            <p class="texto-preparo">
                                Em geral, o frango é temperado e levado
                                ao forno até ficar bem cozido.
                            </p>

                            <a href="{{ route('receita.dia') }}"
                               class="btn-ver-receita">

                                Receita do dia

                            </a>

                        </div>

                    </div>

                </div>


                

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card-receita">

                        <img
                            src="https://images.unsplash.com/photo-1532550907401-a500c9a57435?auto=format&fit=crop&w=900&q=85"
                            alt="Frango Grelhado">

                        <div class="conteudo-card">

                            <h3 class="nome-receita">
                                Frango Grelhado
                            </h3>

                            <p class="descricao">
                                É o frango preparado em contato
                                com uma superfície quente,
                                como uma chapa ou grelha.
                            </p>

                            <div class="subtitulo">
                                Como costuma ser preparado
                            </div>

                            <p class="texto-preparo">
                                Costuma ser temperado e grelhado
                                dos dois lados até ficar bem cozido.
                            </p>

                            <a href="{{ route('receitas') }}"
                               class="btn-ver-receita">

                                Ver receita

                            </a>

                        </div>

                    </div>

                </div>


                

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card-receita">

                        <img
                            src="https://images.unsplash.com/photo-1558030006-450675393462?auto=format&fit=crop&w=900&q=85"
                            alt="Carnes">

                        <div class="conteudo-card">

                            <h3 class="nome-receita">
                                Carnes
                            </h3>

                            <p class="descricao">
                                É uma categoria ampla que pode reunir
                                diferentes tipos de carne e preparações.
                            </p>

                            <div class="subtitulo">
                                Como costuma ser preparado
                            </div>

                            <p class="texto-preparo">
                                O preparo pode variar conforme a carne
                                e a receita escolhida pela cozinha.
                            </p>

                            <a href="{{ route('receitas') }}"
                               class="btn-ver-receita">

                                Ver receita

                            </a>

                        </div>

                    </div>

                </div>


        

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card-receita">

                        <img
                            src="https://images.unsplash.com/photo-1534939561126-855b8675edd7?auto=format&fit=crop&w=900&q=85"
                            alt="Feijão Preto">

                        <div class="conteudo-card">

                            <h3 class="nome-receita">
                                Feijão Preto
                            </h3>

                            <p class="descricao">
                                É um feijão de grãos escuros,
                                geralmente servido com caldo
                                também escuro.
                            </p>

                            <div class="subtitulo">
                                Como costuma ser preparado
                            </div>

                            <p class="texto-preparo">
                                Os grãos são cozidos em água até
                                ficarem macios e depois recebem
                                temperos.
                            </p>

                            <a href="{{ route('receitas') }}"
                               class="btn-ver-receita">

                                Ver receita

                            </a>

                        </div>

                    </div>

                </div>


                

                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card-receita">

                        <img
                            src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=900&q=85"
                            alt="Macarrão">

                        <div class="conteudo-card">

                            <h3 class="nome-receita">
                                Macarrão
                            </h3>

                            <p class="descricao">
                                É uma massa que pode ter vários
                                formatos e ser servida de diferentes
                                maneiras.
                            </p>

                            <div class="subtitulo">
                                Como costuma ser preparado
                            </div>

                            <p class="texto-preparo">
                                Costuma ser cozido em água e depois
                                escorrido. Pode receber molho e outros
                                ingredientes.
                            </p>

                            <a href="{{ route('receitas') }}"
                               class="btn-ver-receita">

                                Ver receita

                            </a>

                        </div>

                    </div>

                </div>


            </div>


          
            <div class="area-receita-dia">

                <h2>
                    Receita do dia
                </h2>

                <p>
                    Confira a receita escolhida para hoje,
                    com ingredientes e modo de preparo.
                </p>

                <a href="{{ route('receita.dia') }}"
                   class="btn-receita-dia">

                    Ver receita do dia

                </a>

            </div>


        </div>

    </main>


   
    <footer class="rodape-receitas">

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6">

                    <span class="senai">
                        SENAI-SP
                    </span>

                    <span class="ms-2">
                        | Cozinha da Lia
                    </span>

                </div>

                <div class="col-md-6 text-md-end mt-2 mt-md-0">

                    Estas explicações são gerais.
                    Ingredientes e formas de preparo podem variar.

                </div>

            </div>

        </div>

    </footer>

</div>

@endsection