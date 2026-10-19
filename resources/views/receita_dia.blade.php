@extends('layout.principal')

@section('title', 'Receita do dia — Cozinha da Lia')

@section('content')

<style>

    body {
        background: #171310 !important;
    }

    .receita-page {
        max-width: 1000px;
        margin: 0 auto;
        background: #f5ead7;
        color: #503326;
        min-height: 100vh;
    }

    /* =========================
       CABEÇALHO
    ========================= */

    .receita-header {
        background: #4b2112;
        color: #f2dcc0;
        padding: 12px 22px 20px;
        border-bottom: 2px solid #a95b30;
    }

    .logo {
        font-family: Georgia, serif;
        font-size: 13px;
        color: #e9c89f;
    }

    .frase-logo {
        font-size: 8px;
        color: #d7b18b;
    }

    .linha-header {
        border-top: 1px dotted #c47c4e;
        border-bottom: 1px dotted #c47c4e;
        padding: 6px 0;
        margin: 5px 0 10px;
    }

    .titulo-receita {
        font-family: Georgia, serif;
        color: #f1d2ac;
        font-size: 15px;
        margin-bottom: 3px;
    }

    .nome-receita {
        font-family: Georgia, serif;
        color: #fff0d6;
        font-size: 31px;
        line-height: 1;
        margin-bottom: 7px;
    }

    .descricao-receita {
        color: #d8b99a;
        font-size: 10px;
        line-height: 1.4;
        max-width: 480px;
        margin-bottom: 8px;
    }

    .sugestao {
        color: #f0d6b5;
        font-size: 8px;
        font-weight: bold;
    }

    .texto-sugestao {
        color: #d4b394;
        font-size: 8px;
        margin-top: 2px;
    }

    .imagem-principal {
        width: 100%;
        height: 145px;
        object-fit: cover;
        border-radius: 8px;
    }

    .imagem-legenda {
        color: #b99370;
        font-size: 7px;
        margin-top: 3px;
    }


    /* =========================
       CONTEÚDO
    ========================= */

    .conteudo {
        padding: 15px 22px 20px;
    }

    .titulo-secao {
        font-family: Georgia, serif;
        font-size: 17px;
        color: #4b2b1d;
        margin-bottom: 9px;
        border-bottom: 1px solid #dcc8ae;
        padding-bottom: 5px;
    }


    /* =========================
       INGREDIENTES
    ========================= */

    .card-ingredientes {
        background: #fffaf1;
        border: 1px solid #dfcfb8;
        border-radius: 8px;
        padding: 12px;
    }

    .subtitulo-card {
        font-family: Georgia, serif;
        font-size: 15px;
        margin-bottom: 2px;
    }

    .info-card {
        color: #8a6e58;
        font-size: 8px;
        margin-bottom: 8px;
    }

    .ingrediente {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #eadfce;
        padding: 5px 0;
        font-size: 9px;
    }

    .ingrediente:last-child {
        border-bottom: none;
    }

    .quantidade {
        color: #a34822;
        font-weight: 600;
        white-space: nowrap;
    }


    /* =========================
       AVISO
    ========================= */

    .aviso {
        background: #ead8bb;
        border-radius: 8px;
        padding: 12px;
        margin-top: 10px;
    }

    .temperatura {
        color: #8e3b1c;
        font-size: 15px;
        font-weight: bold;
    }

    .aviso-texto {
        color: #725944;
        font-size: 8px;
        line-height: 1.4;
        margin: 5px 0 0;
    }


    /* =========================
       MODO DE PREPARO
    ========================= */

    .passo {
        display: flex;
        gap: 10px;
        margin-bottom: 11px;
    }

    .numero {
        min-width: 22px;
        height: 22px;
        border-radius: 50%;
        background: #ead6b8;
        color: #9c542c;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 9px;
        font-weight: bold;
    }

    .passo-titulo {
        font-family: Georgia, serif;
        font-size: 11px;
        color: #4e3023;
        margin-bottom: 2px;
    }

    .passo-texto {
        color: #745d4a;
        font-size: 8px;
        line-height: 1.45;
        margin: 0;
    }


    /* =========================
       PARA COMPLETAR
    ========================= */

    .completar {
        background: #ead8bb;
        border-radius: 8px;
        padding: 12px;
        margin-top: 15px;
    }

    .completar-titulo {
        font-family: Georgia, serif;
        font-size: 15px;
        margin-bottom: 10px;
    }

    .item-completar {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .item-completar img {
        width: 62px;
        height: 50px;
        object-fit: cover;
        border-radius: 7px;
    }

    .item-nome {
        font-family: Georgia, serif;
        font-size: 10px;
        color: #523226;
        margin-bottom: 2px;
    }

    .item-descricao {
        color: #765e49;
        font-size: 7px;
        line-height: 1.35;
        margin: 0;
    }

    .tambem {
        color: #a14822;
        font-size: 7px;
        font-weight: bold;
        text-transform: uppercase;
    }


    /* =========================
       RODAPÉ
    ========================= */

    .rodape {
        border-top: 1px solid #d4bea0;
        padding: 10px 22px;
        font-size: 7px;
        color: #806953;
    }

    .senai {
        color: #ed291d;
        font-weight: bold;
    }


    /* =========================
       RESPONSIVO
    ========================= */

    @media(max-width: 768px) {

        .receita-page {
            width: 100%;
        }

        .nome-receita {
            font-size: 27px;
        }

        .imagem-principal {
            margin-top: 15px;
            height: 190px;
        }

        .conteudo {
            padding: 15px;
        }

        .receita-header {
            padding: 15px;
        }

    }

</style>


<div class="receita-page">

    <!-- =========================
         CABEÇALHO
    ========================= -->

    <header class="receita-header">

        <div class="d-flex justify-content-between align-items-center">

            <div class="logo">
                ♨ Cozinha da Lia
            </div>

            <div class="frase-logo">
                Aqui tem comida boa,
                feita com carinho!
            </div>

        </div>


        <div class="linha-header"></div>


        <div class="row align-items-center">

            <div class="col-md-6">

                <div class="titulo-receita">
                    Receita do dia
                </div>

                <h1 class="nome-receita">
                    Frango Assado
                </h1>

                <p class="descricao-receita">
                    Dourado, perfumado e com sabor de casa.
                    Uma ideia de preparo com alho, limão e alecrim.
                </p>

                <div class="sugestao">
                    Receita sugerida para fazer em casa
                </div>

                <div class="texto-sugestao">
                    Inspirada em um prato do cardápio.
                    Não é a receita oficial do refeitório escolar.
                </div>

            </div>


            <div class="col-md-6">

                <img
                    src="https://images.unsplash.com/photo-1598103442097-8b74394b95c6?auto=format&fit=crop&w=900&q=85"
                    class="imagem-principal"
                    alt="Frango assado">

                <div class="imagem-legenda">
                    Imagem ilustrativa do cardápio · a apresentação pode variar.
                </div>

            </div>

        </div>

    </header>


    <!-- =========================
         CONTEÚDO
    ========================= -->

    <main class="conteudo">

        <div class="row g-4">


            <!-- =====================
                 COLUNA ESQUERDA
            ====================== -->

            <div class="col-md-4">

                <div class="card-ingredientes">

                    <h2 class="subtitulo-card">
                        Ingredientes
                    </h2>

                    <div class="info-card">
                        Colheres rasas · para 4 a 6 porções
                    </div>


                    <div class="ingrediente">
                        <span>Frango inteiro, sem miúdos</span>
                        <span class="quantidade">1,5 kg</span>
                    </div>

                    <div class="ingrediente">
                        <span>Batatas em pedaços</span>
                        <span class="quantidade">500 g</span>
                    </div>

                    <div class="ingrediente">
                        <span>Cebola em pétalas</span>
                        <span class="quantidade">1 unidade</span>
                    </div>

                    <div class="ingrediente">
                        <span>Alho amassado</span>
                        <span class="quantidade">4 dentes</span>
                    </div>

                    <div class="ingrediente">
                        <span>Suco de limão</span>
                        <span class="quantidade">1 limão</span>
                    </div>

                    <div class="ingrediente">
                        <span>Azeite</span>
                        <span class="quantidade">2 col. de sopa</span>
                    </div>

                    <div class="ingrediente">
                        <span>Sal</span>
                        <span class="quantidade">1/2 col. de chá</span>
                    </div>

                    <div class="ingrediente">
                        <span>Páprica doce</span>
                        <span class="quantidade">1 col. de chá</span>
                    </div>

                    <div class="ingrediente">
                        <span>Alecrim seco</span>
                        <span class="quantidade">1 col. de chá</span>
                    </div>

                    <div class="ingrediente">
                        <span>Pimenta-do-reino</span>
                        <span class="quantidade">1/2 col. de chá</span>
                    </div>

                </div>


                <!-- AVISO -->

                <div class="aviso">

                    <div class="temperatura">
                        ♨ 74 °C
                        <small>por dentro</small>
                    </div>

                    <p class="aviso-texto">
                        A cor dourada não garante o cozimento.
                        Use um termômetro culinário para conferir
                        o ponto seguro antes de servir.
                    </p>

                </div>

            </div>


            <!-- =====================
                 COLUNA DIREITA
            ====================== -->

            <div class="col-md-8">

                <h2 class="titulo-secao">
                    Modo de preparo
                </h2>


                <!-- PASSO 1 -->

                <div class="passo">

                    <div class="numero">
                        1
                    </div>

                    <div>

                        <h3 class="passo-titulo">
                            Prepare com cuidado
                        </h3>

                        <p class="passo-texto">
                            Preaqueça o forno a 200 °C.
                            Não lave o frango cru. Seque com papel-toalha
                            e descarte-o, lave as mãos e higienize utensílios
                            e superfícies após o contato com a ave.
                        </p>

                    </div>

                </div>


                <!-- PASSO 2 -->

                <div class="passo">

                    <div class="numero">
                        2
                    </div>

                    <div>

                        <h3 class="passo-titulo">
                            Tempere e deixe pegar sabor
                        </h3>

                        <p class="passo-texto">
                            Misture alho, limão, azeite, sal,
                            páprica, alecrim e pimenta.
                            Espalhe no frango e deixe marinar
                            por alguns minutos.
                        </p>

                    </div>

                </div>


                <!-- PASSO 3 -->

                <div class="passo">

                    <div class="numero">
                        3
                    </div>

                    <div>

                        <h3 class="passo-titulo">
                            Leve ao forno
                        </h3>

                        <p class="passo-texto">
                            Coloque o frango com o peito para cima
                            em uma assadeira e distribua as batatas
                            e a cebola ao redor. Asse até o frango
                            ficar bem cozido e dourado.
                        </p>

                    </div>

                </div>


                <!-- PASSO 4 -->

                <div class="passo">

                    <div class="numero">
                        4
                    </div>

                    <div>

                        <h3 class="passo-titulo">
                            Confira a temperatura interna
                        </h3>

                        <p class="passo-texto">
                            Meça no centro da parte mais grossa da coxa,
                            sem encostar no osso. O interior deve atingir
                            temperatura segura antes de servir.
                        </p>

                    </div>

                </div>


                <!-- PASSO 5 -->

                <div class="passo">

                    <div class="numero">
                        5
                    </div>

                    <div>

                        <h3 class="passo-titulo">
                            Descanse, corte e sirva
                        </h3>

                        <p class="passo-texto">
                            Após retirar do forno, deixe descansar
                            por alguns minutos. Corte em porções
                            e sirva com as batatas assadas.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             PARA COMPLETAR A MESA
        ========================== -->

        <div class="completar">

            <div class="d-flex justify-content-between align-items-center">

                <h2 class="completar-titulo">
                    Para completar a mesa
                </h2>

                <span class="tambem">
                    Também estão no cardápio
                </span>

            </div>


            <div class="row g-3">

                <!-- FEIJÃO -->

                <div class="col-md-6">

                    <div class="item-completar">

                        <img
                            src="https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=400&q=80"
                            alt="Feijão">

                        <div>

                            <h3 class="item-nome">
                                Com feijão carioca
                            </h3>

                            <p class="item-descricao">
                                Sirva uma porção de feijão com caldo
                                ao lado do frango e dos legumes.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- MACARRÃO -->

                <div class="col-md-6">

                    <div class="item-completar">

                        <img
                            src="https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=400&q=80"
                            alt="Macarrão">

                        <div>

                            <h3 class="item-nome">
                                Ou com macarrão
                            </h3>

                            <p class="item-descricao">
                                Prefere massa? Acompanhe com macarrão
                                ao molho de tomate e finalize com cheiro-verde.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>


    <!-- =========================
         RODAPÉ
    ========================== -->

    <footer class="rodape">

        <div class="row">

            <div class="col-md-4">

                <span class="senai">
                    SENAI-SP
                </span>

                <span class="ms-2">
                    | Cozinha da Lia
                </span>

            </div>

            <div class="col-md-8 text-md-end mt-2 mt-md-0">

                Sugestão culinária · ingredientes e preparo podem
                diferir dos usados pela escola.

            </div>

        </div>

    </footer>

</div>

@endsection