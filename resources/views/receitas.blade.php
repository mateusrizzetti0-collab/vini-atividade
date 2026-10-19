@extends('layout.principal')

@section('title', 'Receitas - Cozinha da Lia')

@section('content')

<div class="container py-5">


    <div class="text-center py-5 mb-4">

        <span class="badge rounded-pill text-bg-warning px-4 py-2 mb-3">
            COZINHA DA LIA
        </span>

        <h1 class="display-4 fw-bold mb-3">
            Receitas
        </h1>

        <p class="lead text-body-secondary">
            Confira as receitas disponíveis na Cozinha da Lia.
        </p>

    </div>



    <div class="row justify-content-center mb-5">

        <div class="col-12 col-md-8 col-lg-6">

            <div class="input-group input-group-lg">

                <span class="input-group-text bg-white">
                    Pesquisar
                </span>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Digite o nome da receita..."
                >

            </div>

        </div>

    </div>


    <div class="d-flex justify-content-center flex-wrap gap-2 mb-5">

        <button type="button" class="btn btn-warning">
            Todas
        </button>

        <button type="button" class="btn btn-outline-warning">
            Pratos Principais
        </button>

        <button type="button" class="btn btn-outline-warning">
            Massas
        </button>

        <button type="button" class="btn btn-outline-warning">
            Saladas
        </button>

        <button type="button" class="btn btn-outline-warning">
            Lanches
        </button>

        <button type="button" class="btn btn-outline-warning">
            Sobremesas
        </button>

        <button type="button" class="btn btn-outline-warning">
            Bebidas
        </button>

    </div>


  
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">


      
        <div class="col">

            <div class="card h-100 border-0 shadow">

                <img
                    src="carnes.jpg"
                    class="card-img-top"
                    alt="Frango grelhado"
                >

                <div class="card-body p-4">

                    <span class="badge text-bg-warning mb-3">
                        Pratos Principais
                    </span>

                    <h4 class="card-title fw-bold">
                        Frangos e Carnes
                    </h4>

                    <p class="card-text text-body-secondary">
                        Escolha seu acompanhamento.
                    </p>

                    <a
                        href="{{ route('explicar.receita') }}"
                        class="btn btn-warning"
                    >
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


      
        <div class="col">

            <div class="card h-100 border-0 shadow">

                <img
                    src="massas.jpg"
                    class="card-img-top"
                    alt="Macarrão"
                >

                <div class="card-body p-4">

                    <span class="badge text-bg-danger mb-3">
                        Massas
                    </span>

                    <h4 class="card-title fw-bold">
                        Macarrão
                    </h4>

                    <p class="card-text text-body-secondary">
                        Massa preparada com molho e ingredientes
                        selecionados.
                    </p>

                    <a
                        href="{{ route('explicar.receita') }}"
                        class="btn btn-danger"
                    >
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


      
        <div class="col">

            <div class="card h-100 border-0 shadow">

                <img
                    src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=80"
                    class="card-img-top"
                    alt="Salada"
                >

                <div class="card-body p-4">

                    <span class="badge text-bg-success mb-3">
                        Saladas
                    </span>

                    <h4 class="card-title fw-bold">
                        Salada
                    </h4>

                    <p class="card-text text-body-secondary">
                        Salada preparada com ingredientes frescos
                        e variados.
                    </p>

                    <a
                        href="{{ route('explicar.receita') }}"
                        class="btn btn-success"
                    >
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


     
        <div class="col">

            <div class="card h-100 border-0 shadow">

                <img
                    src="lanches.jpg"
                    class="card-img-top"
                    alt="Lanches da tarde"
                >

                <div class="card-body p-4">

                    <span class="badge text-bg-primary mb-3">
                        Lanches
                    </span>

                    <h4 class="card-title fw-bold">
                        Lanches da tarde
                    </h4>

                    <p class="card-text text-body-secondary">
                        Lanches deliciosos para o intervalo da tarde.
                    </p>

                    <a
                        href="{{ route('explicar.receita') }}"
                        class="btn btn-primary"
                    >
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


      
        <div class="col">

            <div class="card h-100 border-0 shadow">

                <img
                    src="sobremesas.jpg"
                    class="card-img-top"
                    alt="Sobremesas"
                >

                <div class="card-body p-4">

                    <span class="badge text-bg-info mb-3">
                        Sobremesas
                    </span>

                    <h4 class="card-title fw-bold">
                        Sobremesas gostosas
                    </h4>

                    <p class="card-text text-body-secondary">
                        Sobremesas deliciosas para adoçar o seu dia.
                    </p>

                    <a
                        href="{{ route('explicar.receita') }}"
                        class="btn btn-info"
                    >
                        Ver receita
                    </a>

                </div>

            </div>

        </div>


       
        <div class="col">

            <div class="card h-100 border-0 shadow">

                <img
                    src="sucos.jpg"
                    class="card-img-top"
                    alt="Suco de laranja"
                >

                <div class="card-body p-4">

                    <span class="badge text-bg-secondary mb-3">
                        Bebidas Diversas
                    </span>

                    <h4 class="card-title fw-bold">
                        Sucos
                    </h4>

                    <p class="card-text text-body-secondary">
                        Bebidas frescas para acompanhar sua refeição.
                    </p>

                    <a
                        href="{{ route('explicar.receita') }}"
                        class="btn btn-secondary"
                    >
                        Ver receita
                    </a>

                </div>

            </div>

        </div>

    </div>


   
    <div class="text-center py-5 mt-5">

        <h3 class="fw-bold">
            Cozinha da Lia
        </h3>

        <p class="text-body-secondary mb-0">
            Receitas e opções disponíveis no cardápio.
        </p>

    </div>

</div>

@endsection