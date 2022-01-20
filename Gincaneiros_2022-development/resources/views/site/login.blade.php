<!DOCTYPE html>
<html>

    <!-- Cabeçalho da página -->

    <head>

        @include('layouts.parciais.bibliotecas')

        <!-- Importação do título da página -->

        @section('titulo', $titulo)

        <!-- Título da página -->

        <title>@yield('titulo') - Gincaneiros</title>

        <style>

            i {

                margin-right: 5px;

            }
                                         
            body {

                background: #1488CC;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #2B32B2, #1488CC);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #2B32B2, #1488CC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                font-family: "Open Sans", sans-serif;  

            }
         
            .formatacaoDestaque {

                font-family: 'Readex Pro', sans-serif;    

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

        </style>

    </head>

    <!-- Corpo da página -->

    <body>

        <!-- Login -->

        <main>
            <div class="card shadow text-center">
                <div class="card-body">
                    <h1 class="formatacaoDestaque">Login</h1>
                    <h3>É bom ver você novamente!</h3>
                    <p>Para acessar o site, preencha as informações abaixo.</p>
                    <form>
                        <div class="form-floating mb-3">
                            <input id="inputEmail" class="form-control" placeholder="E-mail" type="email" required>
                            <label for="inputEmail"><i class="fas fa-envelope fa-fw"></i>E-mail</label>
                        </div> 
                        <div class="form-floating mb-3">
                            <input id="inputPassword" class="form-control" placeholder="Senha" type="password" required>
                            <label for="inputPassword"><i class="fas fa-key fa-fw"></i>Senha</label>
                        </div>
                        <p><strong>Ainda não possui uma conta? </strong>Clique <a href="{{ route('site.cadastroUsuario') }}">aqui</a> para realizar o seu cadastro!</p>
                        <div>
                            <input class="btn btn-primary formatacaoDestaque" id="botaoEntrar" type="submit" value="ENTRAR">
                        </div>
                    </form>
                </div>
            </div>
        </main>
        
    </body>

</html>