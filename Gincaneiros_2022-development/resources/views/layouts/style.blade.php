<style>

    /* Fontes */

    .formatacaoDestaque {

        font-family: "Readex Pro", sans-serif;

    }

    body {

        font-family: "Open Sans", sans-serif;
        margin-bottom: 75px;

    }

    /* Ícones */
    
    i {
  
        margin-right: 5px;

    }

    /* Rodapé */

    footer {

        background-color: #ECECEC;

    }

    /* Cabeçalho */
    
    header {

        margin: 20px 20px 0px 20px;
        text-align: center;

    }

    /* Imagem de destaque dos Cards */

    .imagemDestaqueCard {

        height: 300px;

    }

    /* Formulário */

    #formulario {

        margin: 20px 20px 0px 20px;

    }

    .asteriscoObrigatorio {

        color: red;

    }   

    /* Formatação Responsiva */
    
    @media (min-width: 0px) and (max-width: 1199.98px) { 
        
        .btn {

            width: 100%;

        }

        .formatacaoEspecialBotaoResponsivo{

            margin-top: 10px;

        }

        .dropdown {

            margin-bottom: 15px;

        }

    }

    @media (min-width: 1199.99px) { 
        
        #botaoLogin {

            margin-left: 10px;
    
        }

    }

    /* Cor dos Troféus */

    #trofeuDourado {

        color: gold; 
        margin-right: 0px;

    }

    #trofeuPrata {

        color: silver; 
        margin-right: 0px;

    }

    #trofeuBronze {

        color: #CD7F32; 
        margin-right: 0px;

    }

    /* Importação da formatação da página que está sendo atualmente visatada pelo usuário */

    @yield('formatacaoCriarGincanaEmpresarial')

    @yield('formatacaoCriarGincanaPessoal')

    @yield('formatacaoGincanasEmpresariaisAtivas')
   
    @yield('formatacaoGincanasPessoaisAtivas')

    @yield('formatacaoGincanasQueCriei')

    @yield('formatacaoMinhasGincanas')

    @yield('formatacaoPrincipal')

    @yield('formatacaoQuestoesGincanas')

    @yield('formatacaoSaldo')

    @yield('formatacaoSobreNos')

    @yield('formatacaoEditarQuestoesGincana')

    @yield('formatacaoNenhumaGincanaAtiva')

    @yield('formatacaoRankingGincana')

    @yield('formatacaoRankingMinhaGincana')

    @yield('formatacaoMeuPerfil')

    @yield('formatacaoMeusCupons')

    @yield('formatacaoAjuda')

    @yield('formatacaoCadastroUsuario')

    @yield('formatacaoValidarCuponsMinhaGincana')

</style>