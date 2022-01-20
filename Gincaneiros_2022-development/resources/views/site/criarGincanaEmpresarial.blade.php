@extends('layouts.basico')
@section('titulo', $titulo) 

@section('formatacaoCriarGincanaEmpresarial')

    #containerBotaoVoltar {

        text-align: center;
        margin-bottom: 20px;

    }

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

@section('criarGincanaEmpresarial')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Criação de Gincanas Empresariais</h1>
        <h3>Crie jogos de descontos para sua empresa</h3>
        <p>Digite nos campos abaixo as informações da nova gincana empresarial.</p>
    </header>

    <!-- Campos de entrada para criação de Gincanas Empresariais -->

    <main>
        <form id="formulario" class="row g-3 align-items-center d-flex justify-content-center">
            <div class="mb-3">
                <label for="inputTitulo" class="form-label h5 formatacaoDestaque">Título<span class="asteriscoObrigatorio"> *</span></label>
                <p class="form-text" id="textoTitulo">Digite o título de sua gincana.</p>
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
                <label for="inputRegras" class="form-label h5 formatacaoDestaque">Regras<span class="asteriscoObrigatorio"> *</span></label>
                <p class="form-text">Informe aqui as regras de sua gincana.</p>
                <textarea class="form-control" id="inputRegras" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="inputPremio" class="form-label h5 formatacaoDestaque">Prêmio<span class="asteriscoObrigatorio"> *</span></label>
                <p class="form-text" id="textoPremio">Digite neste campo o tipo de produto ou serviço que será ofertado pela gincana.</p> 
                <input type="text" class="form-control" id="inputPremio" aria-describedby="textoPremio" required>
            </div>

            <div class="mb-3">
                <label for="inputValorPremio" class="form-label h5 formatacaoDestaque">Valor Total do Prêmio<span class="asteriscoObrigatorio"> *</span></label>
                <p class="form-text">Digite aqui o valor integral (sem descontos) do serviço ou do produto oferecido.</p>
                <input type="text" class="form-control" id="inputValorPremio" required>
            </div>
            <div class="mb-3">
                <label for="selectValidade" class="form-label h5 formatacaoDestaque" id="selectLabelValidade">Validade do Cupom<span class="asteriscoObrigatorio"> *</span></label>
                <p class="form-text">Escolha o prazo de validade do cupom de desconto.</p>
                <select class="form-select" aria-labelledby="selectLabelValidade">
                    <option selected>Selecione uma opção...</option>
                    <option value="30">30 dias</option>
                    <option value="60">60 dias</option>
                    <option value="90">90 dias</option>
                </select>
            </div>
            <label class="form-label h5 formatacaoDestaque">Pontos<span class="asteriscoObrigatorio"> *</span></label>
            <p class="form-text">Escolha a quantidade de pontos gerados aos mais bem colocados.</p>
            <div class="linhaSelectPontos row">
                <div class="col">
                    <label for="inputColocado1" class="form-label">1º colocado (100% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado1" required>
                </div>
                <div class="col">
                    <label for="inputColocado2" class="form-label">2º colocado (90% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado2" required>
                </div>
                <div class="col">
                    <label for="inputColocado3" class="form-label">3º colocado (80% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado3" required>
                </div>
            </div>
            <div class="linhaSelectPontos row">
                <div class="col">
                    <label for="inputColocado4" class="form-label">4º colocado (70% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado4" required>
                </div>
                <div class="col">
                    <label for="inputColocado5" class="form-label">5º colocado (60% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado5" required>
                </div>
                <div class="col">
                    <label for="inputColocado6" class="form-label">6º colocado (50% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado6" required>
                </div>
            </div>            
            <div class="linhaSelectPontos row">
                <div class="col">
                    <label for="inputColocado7" class="form-label">7º colocado (40% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado7" required>
                </div>
                <div class="col">
                    <label for="inputColocado8" class="form-label">8º colocado (30% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado8" required>
                </div>
                <div class="col">
                    <label for="inputColocado9" class="form-label">9º colocado (20% de desconto)</label>
                    <input type="number" class="form-control" id="inputColocado9" required>
                </div>
            </div>            
            <p class="form-text" id="textoPontos2"><strong>A partir do 10º colocado: </strong>10% + 1% por questão correta <i>(máximo: 10 questões)</i></p>
            <div class="mb-3">
                <label for="inputImagem" class="form-label h5 formatacaoDestaque">Imagem de destaque</label>
                <p class="form-text">Envie uma imagem de destaque para a sua gincana.</p>
                <input class="form-control" type="file" id="inputImagem">   
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-primary formatacaoDestaque" value="CRIAR GINCANA EMPRESARIAL"></input> 
                <a class="btn btn-outline-danger formatacaoDestaque formatacaoEspecialBotaoResponsivo" href="{{ route('site.principal') }}"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA INICIAL</a>  
            </div>         
        </form>
    </main>      

@endsection