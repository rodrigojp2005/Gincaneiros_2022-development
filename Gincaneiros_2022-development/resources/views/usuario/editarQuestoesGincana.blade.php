@extends('layouts.basico')
@section('titulo', $titulo) 

@section('formatacaoEditarQuestoesGincana')

    .card-text {

        margin-bottom: 5px;

    }

    .row {

        margin: 0px 20px 20px 20px;

    }

    .listagemAlternativas {

        text-align: left;

    }

@endsection

@section('editarQuestoesGincana')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Edição de Questões de Gincana</h1>
        <h3>Visualizando as perguntas da "Gincana #1"</h3>
        <p>Clique no botão abaixo para adicionar uma nova pergunta para essa gincana, ou realize alterações/exclua as questões clicando nos cards.</p>
        <a class="btn btn-primary formatacaoDestaque" data-bs-toggle="modal" data-bs-target="#modalCadastro"><i class="fas fa-plus fa-fw"></i>ADICIONAR QUESTÃO</a>
    </header>

    <!-- Cards das questões -->

    <main>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Questão 1">
                    <div class="card-body">
                        <h3 class="card-title formatacaoDestaque">Questão #1</h3>
                        <p class="card-text">
                            "Pergunta da Questão #1"
                            <ul class="listagemAlternativas">
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                            </ul>
                        </p>
                        <a class="btn btn-primary formatacaoDestaque" data-bs-toggle="modal" data-bs-target="#modal"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                        <a class="btn btn-danger formatacaoDestaque formatacaoEspecialBotaoResponsivo" data-bs-toggle="modal" data-bs-target="#modalExclusao"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Questão 2">
                    <div class="card-body">
                        <h3 class="card-title formatacaoDestaque">Questão #2</h3>
                        <p class="card-text">
                            "Pergunta da Questão #2"
                            <ul class="listagemAlternativas">
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                            </ul>
                        </p>
                        <a class="btn btn-primary formatacaoDestaque" data-bs-toggle="modal" data-bs-target="#modal"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                        <a class="btn btn-danger formatacaoDestaque formatacaoEspecialBotaoResponsivo" data-bs-toggle="modal" data-bs-target="#modalExclusao"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center shadow-sm">
                    <img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Questão 3">
                    <div class="card-body">
                        <h3 class="card-title formatacaoDestaque">Questão #3</h3>
                        <p class="card-text">
                            "Pergunta da Questão #3"
                            <ul class="listagemAlternativas">
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                                <li>Alternativa...</li>
                            </ul>
                        </p>
                        <a class="btn btn-primary formatacaoDestaque" data-bs-toggle="modal" data-bs-target="#modal"><i class="fas fa-edit fa-fw"></i>EDITAR</a>
                        <a class="btn btn-danger formatacaoDestaque formatacaoEspecialBotaoResponsivo" data-bs-toggle="modal" data-bs-target="#modalExclusao"><i class="fas fa-trash fa-fw"></i>EXCLUIR</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal: Cadastro -->

    <div class="modal fade" id="modalCadastro" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalCadastroLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title formatacaoDestaque" id="modalCadastroLabel">ADICIONAR QUESTÃO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputPergunta" class="form-label h5 formatacaoDestaque">Pergunta<span class="asteriscoObrigatorio"> *</span></label>
                            <p id="textoPergunta" class="form-text">Digite a pergunta da sua gincana.</p>
                            <input type="text" class="form-control" id="inputPergunta" aria-describedby="textoPergunta" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputAlternativa1" class="form-label h5 formatacaoDestaque">1ª alternativa<span class="asteriscoObrigatorio"> *</span></label>
                            <p id="textoAlternativa1" class="form-text">Informe a primeira alternativa.</p>
                            <input type="text" class="form-control" id="inputAlternativa1" aria-describedby="textoAlternativa1" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputAlternativa2" class="form-label h5 formatacaoDestaque">2ª alternativa<span class="asteriscoObrigatorio"> *</span></label>
                            <p id="textoAlternativa2" class="form-text">Informe a segunda alternativa.</p>
                            <input type="text" class="form-control" id="inputAlternativa2" aria-describedby="textoAlternativa2" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputAlternativa3" class="form-label h5 formatacaoDestaque">3ª alternativa</label>
                            <p id="textoAlternativa3" class="form-text">Informe a terceira alternativa. <strong>Observação: </strong>esse campo é opcional.</p>
                            <input type="text" class="form-control" id="inputAlternativa3" aria-describedby="textoAlternativa3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label h5 formatacaoDestaque" id="selectGabarito">Gabarito<span class="asteriscoObrigatorio"> *</span></label>
                            <p class="form-text">Escolha a alternativa (das informadas anteriormente) que está correta.</p>
                            <select class="form-select" aria-labelledby="selectGabarito">
                                <option selected>Selecione uma opção...</option>
                                <option value="1">1ª alternativa</option>
                                <option value="2">2ª alternativa</option>
                                <option value="3">3ª alternativa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputImagem" class="form-label h5 formatacaoDestaque">Imagem de destaque</label>
                            <p class="form-text">Envie uma imagem de destaque para a sua gincana.</p>
                            <input class="form-control" type="file" id="inputImagem">   
                        </div>
                        <div class="mb-3 text-center">
                            <input type="submit" class="btn btn-primary formatacaoDestaque" value="ADICIONAR QUESTÃO"></input>
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>

    <!-- Modal: Edição -->

    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title formatacaoDestaque" id="modalLabel">EDITAR QUESTÃO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="inputPergunta" class="form-label h5 formatacaoDestaque">Pergunta<span class="asteriscoObrigatorio"> *</span></label>
                            <p id="textoPergunta" class="form-text">Digite a pergunta da sua gincana.</p>
                            <input type="text" class="form-control" id="inputPergunta" aria-describedby="textoPergunta" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputAlternativa1" class="form-label h5 formatacaoDestaque">1ª alternativa<span class="asteriscoObrigatorio"> *</span></label>
                            <p id="textoAlternativa1" class="form-text">Informe a primeira alternativa.</p>
                            <input type="text" class="form-control" id="inputAlternativa1" aria-describedby="textoAlternativa1" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputAlternativa2" class="form-label h5 formatacaoDestaque">2ª alternativa<span class="asteriscoObrigatorio"> *</span></label>
                            <p id="textoAlternativa2" class="form-text">Informe a segunda alternativa.</p>
                            <input type="text" class="form-control" id="inputAlternativa2" aria-describedby="textoAlternativa2" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputAlternativa3" class="form-label h5 formatacaoDestaque">3ª alternativa</label>
                            <p id="textoAlternativa3" class="form-text">Informe a terceira alternativa. <strong>Observação: </strong>esse campo é opcional.</p>
                            <input type="text" class="form-control" id="inputAlternativa3" aria-describedby="textoAlternativa3">
                        </div>
                        <div class="mb-3">
                            <label class="form-label h5 formatacaoDestaque" id="selectGabarito">Gabarito<span class="asteriscoObrigatorio"> *</span></label>
                            <p class="form-text">Escolha a alternativa (das informadas anteriormente) que está correta.</p>
                            <select class="form-select" aria-labelledby="selectGabarito">
                                <option selected>Selecione uma opção...</option>
                                <option value="1">1ª alternativa</option>
                                <option value="2">2ª alternativa</option>
                                <option value="3">3ª alternativa</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="inputImagem" class="form-label h5 formatacaoDestaque">Imagem de destaque</label>
                            <p class="form-text">Envie uma imagem de destaque para a sua gincana.</p>
                            <input class="form-control" type="file" id="inputImagem">   
                        </div>
                        <div class="mb-3 text-center">
                            <input type="submit" class="btn btn-primary formatacaoDestaque" value="CONFIRMAR ALTERAÇÕES"></input>
                        </div>
                    </form>
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