@extends('layouts.basico')
@section('titulo', $titulo) 

@section('formatacaoCadastroUsuario')

    body {

        background: #1488CC;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }

    .form-check {

        display: inline-block;

    }

    @media (min-width: 0px) and (max-width: 1199.98px){ 
                
        main {

            margin: 50px 40px 50px 40px;

        }
        
        #botaoEntrar {

            width: 100%;

        }
    
    }

    @media (min-width: 1200px){
    
        main {

            margin: 200px;

        }

    }

@endsection

@section('cadastroUsuario')

    <!-- Formulário de cadastro de novos usuários -->

    <main>
        <div class="card shadow text-center">
            <div class="card-body">
                <h1 class="formatacaoDestaque">Cadastro de Novo Usuário</h1>
                <h3>Seja muito bem-vindo(a)!</h3>
                <p>Digite nos campos abaixo suas informações para realizar o cadastro no site. <strong>Já possui uma conta?</strong> Clique <a href="{{ route('site.login') }}">aqui</a> para realizar o acesso ao sistema.</p>
                <form id="formulario">
                    <div class="mb-3">
                        <label for="inputNomeCompleto" class="form-label h5 formatacaoDestaque">Nome<span class="asteriscoObrigatorio"> *</span></label>
                        <p class="form-text">Digite o seu nome e sobrenome. Lembrando que esse nome é <strong> público</strong>, ou seja, os outros usuários do site poderão visualizá-lo.</p>
                        <input type="text" class="form-control" id="inputNomeCompleto" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label h5 formatacaoDestaque">E-mail<span class="asteriscoObrigatorio"> *</span></label>
                        <p class="form-text">Informe o e-mail que você irá utilizar para acessar o site.</p>
                        <input type="text" class="form-control" id="inputEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputImagem" class="form-label h5 formatacaoDestaque">Foto de perfil</label>
                        <p class="form-text">Envie uma imagem de perfil (opcional). <strong>Observação: </strong>todos os usuários poderam ver sua foto.</p>
                        <input class="form-control" type="file" id="inputImagem">   
                    </div>
                    <div class="mb-3">
                        <label for="inputSenha" class="form-label h5 formatacaoDestaque">Senha<span class="asteriscoObrigatorio"> *</span></label>
                        <p class="form-text">Crie uma senha para realizar o acesso da conta.</p>
                        <input type="text" class="form-control" id="inputSenha" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputConfirmarSenha" class="form-label h5 formatacaoDestaque">Confirmar senha<span class="asteriscoObrigatorio"> *</span></label>
                        <p class="form-text">Digite novamente a sua senha abaixo.</p>
                        <input type="text" class="form-control" id="inputConfirmarSenha" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkboxTermos" required>
                        <label class="form-check-label" for="checkboxTermos">Li e concordo com os <a href="#" target="_blank">Termos de Uso</a><span class="asteriscoObrigatorio"> *</span></label>
                    </div>
                    <br>
                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkboxTipoUsuario" required>
                        <label class="form-check-label" for="checkboxTipoUsuario">O usuário que está sendo cadastrado é um proprietário de uma empresa? <a href="" data-bs-toggle="modal" data-bs-target="#modal"><i class="fas fa-info-circle fa-fw"></i></a></label>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary formatacaoDestaque" value="CRIAR CONTA"></input> 
                    </div> 
                </form>
            </div>
        </div>
    </main>

    <!-- Modal -->

    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title formatacaoDestaque" id="modalLabel">SOBRE OS TIPOS DE USUÁRIO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati veniam provident nesciunt corporis delectus ipsam nam? Porro vitae ratione nisi quam repellendus consequuntur dolorem exercitationem aut incidunt sapiente, ipsam nam.</p>
                    <div class="text-center">
                        <button type="button" class="btn btn-primary formatacaoDestaque" data-bs-dismiss="modal"><i class="fas fa-check fa-fw"></i>ENTENDI. PROSSEGUIR COM O CADASTRO</button>
                    </div>
                </div>   
            </div>
        </div>
    </div>

@endsection