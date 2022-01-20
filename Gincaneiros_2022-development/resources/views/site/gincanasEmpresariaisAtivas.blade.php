@extends('layouts.basico')
@section('titulo', $titulo)

@section('formatacaoGincanasEmpresariaisAtivas')

    .row {

        margin: 0px 20px 20px 20px;

    }

    .collapseListagemRegras {

        margin-bottom: 15px;

    }

@endsection

@section('gincanasEmpresariaisAtivas')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Gincanas Empresariais Ativas</h1>
        <h3>3 gincanas empresariais estão ativas em sua cidade</h3>
        <p>Clique <a href="{{ route('site.gincanasPessoaisAtivas') }}">aqui</a> para acessar as <strong>gincanas pessoais ativas</strong>, ou clique no botão abaixo para criar uma nova gincana.</p>
        <a class="btn btn-primary formatacaoDestaque" href="{{ route('site.criarGincanaEmpresarial') }}"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA EMPRESARIAL</a>
    </header>

    <!-- Cards das gincanas empresariais -->
    
    <main>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana #1">
                    <div class="card-body">
                        <h3 class="card-title formatacaoDestaque">Gincana #1</h3>
                        <h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
                        <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus non voluptatem aut corporis ratione, ducimus iste placeat corrupti nesciunt tempora! Autem tempora perferendis voluptatem tenetur necessitatibus ad harum iste asperiores?</p>
                        <p>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseListagemRegrasGincana1" aria-expanded="false" aria-controls="collapseListagemRegrasGincana1"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                        </p>
                        <div class="collapse collapseListagemRegras" id="collapseListagemRegrasGincana1">
                            <div class="card card-body">
                                <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana #2">
                    <div class="card-body">
                        <h3 class="card-title formatacaoDestaque">Gincana #2</h3>
                        <h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
                        <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias voluptates odio voluptatibus asperiores vitae laborum nihil provident dolores aliquid magni? Nulla, officia earum aliquid odio culpa eaque quidem reiciendis. Est?</p>
                        <p>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseListagemRegrasGincana2" aria-expanded="false" aria-controls="collapseListagemRegrasGincana2"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                        </p>
                        <div class="collapse collapseListagemRegras" id="collapseListagemRegrasGincana2">
                            <div class="card card-body">
                                <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana #3">
                    <div class="card-body">
                        <h3 class="card-title formatacaoDestaque">Gincana #3</h3>
                        <h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
                        <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore delectus deserunt expedita excepturi deleniti possimus magni accusantium qui fugiat asperiores, ipsam, unde repellendus maxime corrupti id inventore fuga. Quibusdam, distinctio?</p>
                        <p>
                            <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseListagemRegrasGincana3" aria-expanded="false" aria-controls="collapseListagemRegrasGincana3"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                        </p>
                        <div class="collapse collapseListagemRegras" id="collapseListagemRegrasGincana3">
                            <div class="card card-body">
                                <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                                Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                            </div>
                        </div>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR GINCANA</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection