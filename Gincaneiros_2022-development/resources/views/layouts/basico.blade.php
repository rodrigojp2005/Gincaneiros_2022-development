<!DOCTYPE html>

<html>

    <!-- Cabeçalho da página -->

    <head>

        @include('layouts.parciais.bibliotecas')

        <!-- Importação do arquivo de fonte de estilo (CSS) -->

        @include('layouts.style')

        <!-- Título da página -->

        <title>@yield('titulo') - Gincaneiros</title>    

    </head>

    <!-- Corpo da página -->

    <body>

        <!-- Barra de Navegação -->

        @include('layouts.parciais.barraNavegacao')

        <!-- Importação do código da página carregada no momento -->

        @yield('home')

        @yield('saldo')

        @yield('minhasGincanas')

        @yield('cidade')

        @yield('criarGincanaEmpresarial')

        @yield('criarGincanaPessoal')

        @yield('gincanasQueParticipo')

        @yield('gincanasEmpresariaisAtivas')

        @yield('gincanasPessoaisAtivas')

        @yield('questoesGincanas')

        @yield('cadastroUsuario')

        @yield('login')

        @yield('sobreNos')

        @yield('contato')

        @yield('editarQuestoesGincana')

        @yield('nenhumaGincanaAtiva')

        @yield('rankingGincana')

        @yield('rankingMinhaGincana')

        @yield('meuPerfil')

        @yield('meusCupons')

        @yield('ajuda')

        @yield('validarCuponsMinhaGincana')

    </body>

    <!-- Rodapé -->
    
    <footer class="text-center p-3 fixed-bottom">
        
        <span>Gincaneiros - Gincana de Ofertas</span>
        
    </footer>

</html>