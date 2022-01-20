@extends('layouts.basico')
@section('titulo', $titulo) 

@section('formatacaoNenhumaGincanaAtiva')

    .row {

        margin: 0px 20px 20px 20px;

    }

    #containerBotaoVoltar {

        text-align: center;
        margin: 0px 20px 20px 20px;

    }

    header p {

        margin-bottom: 0px;

    }

@endsection

@section('nenhumaGincanaAtiva')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Gincanas Ativas</h1>
        <h3>Ops! Atualmente, não há gincanas ativas no sistema.</h3>
        <p>Para criar uma nova gincana, selecione uma das opções dos cards abaixo.</p>
    </header>

    <!-- Cards das opções de criação de gincanas -->

    <main>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card text-center h-100 shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana Empresarial">
                    <div class="card-body">
                        <h3 class="card-title formatacaoDestaque">Gincanas Empresariais</h3>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis molestias beatae recusandae, vel laudantium odio deserunt eum nam voluptate incidunt in pariatur sapiente iure minima esse ipsum quisquam expedita exercitationem.</p>
                        <a class="btn btn-primary formatacaoDestaque" href="{{ route('site.criarGincanaEmpresarial') }}"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA EMPRESARIAL</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center h-100 shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana Pessoal">
                    <div class="card-body">
                        <h3 class="card-title formatacaoDestaque">Gincanas Pessoais</h3>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore maiores ex aspernatur omnis iure, a veritatis consectetur eveniet quo officia quia vero natus, reprehenderit et optio sed ab saepe reiciendis!</p>
                        <a class="btn btn-primary formatacaoDestaque" href="{{ route('site.criarGincanaPessoal') }}"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA PESSOAL</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Botão de retorno -->
    
    <div id="containerBotaoVoltar">
        <a class="btn btn-outline-danger formatacaoDestaque" href="{{ route('site.principal') }}"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA INICIAL</a>
    </div>

@endsection