@extends('layouts.basico')
@section('titulo', $titulo)

@section('formatacaoQuestoesGincanas')

    header p {

        margin-bottom: 0px;

    }
    
    #containerBotaoVoltar {

        text-align: center;
        margin: 0px 20px 20px 20px;

    }

    .row {

        margin: 0px 20px 20px 20px;

    }

    .listagemAlternativas {

        text-align: left;

    }

    .card-text {

        margin: 0px;

    }

    #formulario {

        margin-top: 0px;
        margin-bottom: 0px;

    }

    @media (min-width: 0px) and (max-width: 1199.98px) { 

        .btn:first-child {

            margin-bottom: 10px;

        }

        #botaoSubmeter {

            margin-bottom: 0px;
        }

    }

@endsection

@section('questoesGincanas')

   <!-- Cabeçalho do corpo da página -->

   <header>
        <h1 class="formatacaoDestaque">Questões da Gincana</h1>
        <h3>Mostrando as questões da "Gincana de Exemplo #1"</h3>
        <p>Visualize e responda as questões dessa gincana para ganhar pontos!</p>
        <!--
        <form id="formulario" class="row g-3 align-items-center d-flex justify-content-center">
            <div class="col-auto">
                <label for="inputCodigoAmigo" class="col-form-label">Possui um código de um amigo? Informe-o no campo ao lado e <strong>ganhe 2 pontos</strong>!</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputCodigoAmigo" class="form-control">
            </div>
            <div class="col-auto">
                <input id="botaoSubmeter" class="btn btn-primary formatacaoDestaque" type="submit" value="SUBMETER" name="">
            </div>
        </form>
        -->
    </header>

    <!-- Cards das questões -->

    <main>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Questão #1">
                    <div class="card-body">
                        <h4 class="card-title formatacaoDestaque">Questão #1</h4>
                        <p class="card-text">
                            "Pergunta da Questão #1"
                            <ul class="listagemAlternativas">
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                            </ul>
                        </p>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-reply fa-fw"></i>RESPONDER</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Questão #2">
                    <div class="card-body">
                        <h4 class="card-title formatacaoDestaque">Questão #2</h4>
                        <p class="card-text">
                            "Pergunta da Questão #2"
                            <ul class="listagemAlternativas">
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                            </ul>
                        </p>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-reply fa-fw"></i>RESPONDER</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Questão #3">
                    <div class="card-body">
                        <h4 class="card-title formatacaoDestaque">Questão #3</h4>
                        <p class="card-text">
                            "Pergunta da Questão #3"
                            <ul class="listagemAlternativas">
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                            </ul>
                        </p>
                        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-reply fa-fw"></i>RESPONDER</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botão de retorno -->
    
        <div id="containerBotaoVoltar">
            <a class="btn btn-outline-danger formatacaoDestaque" onclick="history.back()"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA ANTERIOR</a>
        </div>

    </main>
    
        
@endsection
