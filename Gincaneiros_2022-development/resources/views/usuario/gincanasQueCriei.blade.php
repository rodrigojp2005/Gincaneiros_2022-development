@extends('layouts.basico')
@section('titulo', $titulo)

@section('formatacaoGincanasQueCriei')

    .row {

        margin: 0px 20px 20px 20px;

    }   

    .collapseListagemRegras {

        margin-bottom: 15px;

    }

    .gincanaEncerrada {

        color: red;

    }

    @media (min-width: 1199.99px) { 
        
        .segundaLinhaBotoes {

            margin-top: 5px;
    
        }

    }

@endsection

@section('gincanasQueParticipo')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Minhas Gincanas</h1>
        <h3>2 gincanas foram criadas por você</h3>
        <p>Para ver as gincanas que você está participando clique <a href="{{ route('usuario.gincanasQueParticipo') }}">aqui</a>, ou selecione uma das opções abaixo para criar uma nova gincana.</p>
        <a type="button" class="btn btn-primary formatacaoDestaque" href="{{ route('site.criarGincanaEmpresarial') }}"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA EMPRESARIAL</a>
        <a type="button" class="btn btn-primary formatacaoDestaque formatacaoEspecialBotaoResponsivo" href="{{ route('site.criarGincanaPessoal') }}"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA PESSOAL</a>
    </header>

    <!-- Cards da minhas gincanas criadas -->

    <main>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-center shadow-sm">
                <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana 1">
                <div class="card-body">
                    <h3 class="card-title formatacaoDestaque">Gincana #1</h3>
                    <h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
                    <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
                    <p>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseListagemRegrasGincana1" aria-expanded="false" aria-controls="collapseListagemRegrasGincana1"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                    </p>
                    <div class="collapse collapseListagemRegras" id="collapseListagemRegrasGincana1">
                        <div class="card card-body">
                            <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                    <a class="btn btn-primary formatacaoDestaque" href="{{ route('site.questoesGincanas') }}"><i class="fas fa-eye fa-fw"></i>VISUALIZAR</a>
                    <a class="btn btn-primary formatacaoDestaque formatacaoEspecialBotaoResponsivo" href="{{ route('usuario.rankingMinhaGincana') }}"><i class="fas fa-medal fa-fw"></i>RANKING</a>
                    <a class="btn btn-secondary formatacaoDestaque formatacaoEspecialBotaoResponsivo" data-bs-toggle="modal" data-bs-target="#modalEdicao"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                    <a class="btn btn-danger segundaLinhaBotoes formatacaoDestaque formatacaoEspecialBotaoResponsivo" data-bs-toggle="modal" data-bs-target="#modalExclusao"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center shadow-sm">
                <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana 2">
                <div class="card-body">
                    <h3 class="card-title formatacaoDestaque">Gincana #2</h3>
                    <h5 class="gincanaEncerrada">GINCANA ENCERRADA!</h5>
                    <p class="card-subtitle mb-2"><strong>Descrição</strong></p>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
                    <p>
                        <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseListagemRegrasGincana2" aria-expanded="false" aria-controls="collapseListagemRegrasGincana2"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
                    </p>
                    <div class="collapse collapseListagemRegras" id="collapseListagemRegrasGincana2">
                        <div class="card card-body">
                            <p class="card-subtitle mb-2"><strong>Regras</strong></p>
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                        </div>
                    </div>
                    <a class="btn btn-primary formatacaoDestaque" href="{{ route('usuario.rankingMinhaGincana') }}"><i class="fas fa-medal fa-fw"></i>RANKING</a>
                    <a class="btn btn-secondary formatacaoDestaque formatacaoEspecialBotaoResponsivo" data-bs-toggle="modal" data-bs-target="#modalEdicao"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                    <a class="btn btn-danger formatacaoDestaque formatacaoEspecialBotaoResponsivo" data-bs-toggle="modal" data-bs-target="#modalExclusao"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal: Edição -->

    <div class="modal fade" id="modalEdicao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEdicaoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title formatacaoDestaque" id="modalEdicaoLabel">EDITAR GINCANA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Incidunt, accusantium voluptatibus debitis consectetur qui enim commodi! Modi doloremque dolor ab officiis ducimus. Unde illo ipsa laudantium velit dignissimos excepturi incidunt.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary formatacaoDestaque">CONFIRMAR ALTERAÇÕES</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Exclusão -->

    <div class="modal fade" id="modalExclusao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalExclusaoLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title formatacaoDestaque" id="modalExclusaoLabel">EXCLUIR GINCANA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa blanditiis facilis cum laboriosam quis distinctio, tempora pariatur? Harum eius hic exercitationem ut nulla quos neque, aliquam eligendi maiores asperiores magnam!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger formatacaoDestaque">CONFIRMAR EXCLUSÃO</button>
                </div>
            </div>
        </div>
    </div>

@endsection