@extends('layouts.basico')
@section('titulo', $titulo)

@section('formatacaoCriarGincanaPessoal')

    .linhaSelectPontos .col {

        margin-bottom: 20px;

    }

    .linhaSelectPontos .col:first-child {

        padding-left: 7.5px;

    }

    .linhaSelectPontos .col:nth-child(3) {

        padding-right: 7.5px;

    }

    #linhaDatasGincana .col:first-child {

        padding-left: 7.5px;

    }

    #linhaDatasGincana .col:nth-child(2) {

        padding-right: 7.5px;

    }

    .row {

        padding-right: 0px;
        padding-left: 0px;

    }

    #textoPontos2 {

        margin-bottom: 0px;

    }

@endsection

@section('criarGincanaPessoal')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Criação de Gincanas Pessoais</h1>
        <h3>Crie seus próprios jogos</h3>
        <p>Digite nos campos abaixo as informações da nova gincana pessoal.</p>
    </header>

    <!-- Campos de entrada para criação de Gincanas Pessoais -->

    <main>
        <form class="row g-3 align-items-center d-flex justify-content-center" id="formulario">
            <div class="mb-3">
                <label for="inputTitulo" class="form-label h5 formatacaoDestaque">Título<span class="asteriscoObrigatorio"> *</span></label>
                <p class="form-text" id="textoTitulo">Digite o título de sua gincana. Recomendamos a utilização do nome da sua empresa como nome de gincana.</p>
                <input type="text" class="form-control" id="inputTitulo" aria-describedby="textoTitulo" required>
            </div>
            <div class="row mb-3" id="linhaDatasGincana">
                <div class="col">
                    <label for="inputInicio" class="form-label h5 formatacaoDestaque">Início da gincana<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Selecione o dia em que a gincana <strong>começa</strong>.</p>
                    <input type="date" class="form-control" aria-label="Início da gincana" required>
                </div>
                <div class="col">
                    <label for="inputFim" class="form-label h5 formatacaoDestaque">Fim da gincana<span class="asteriscoObrigatorio"> *</span></label>
                    <p class="form-text">Selecione o dia em que a gincana <strong>termina</strong>.</p>
                    <input type="date" class="form-control" aria-label="Fim da gincana" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputDescricao" class="form-label h5 formatacaoDestaque">Descrição<span class="asteriscoObrigatorio"> *</span></label>
                <p class="form-text">Descreva a sua gincana.</p>
                <textarea class="form-control" id="inputDescricao" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="inputImagem" class="form-label h5 formatacaoDestaque">Imagem de destaque</label>
                <p id="textoImagem" class="form-text">Envie uma imagem de destaque para a sua gincana.</p>                    
                <input class="form-control" type="file" id="inputImagem">
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-primary formatacaoDestaque" value="CRIAR GINCANA PESSOAL"></input>
                <a class="btn btn-outline-danger formatacaoDestaque formatacaoEspecialBotaoResponsivo" href="{{ route('site.principal') }}"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA INICIAL</a> 
            </div>  
        </form>
    </main>

@endsection