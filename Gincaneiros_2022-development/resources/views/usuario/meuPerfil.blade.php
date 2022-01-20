@extends('layouts.basico')
@section('titulo', $titulo)

@section('formatacaoMeuPerfil')

    main {

        margin: 20px;

    }

    #detalhesPerfil {

        margin-bottom: 50px;

    }

@endsection

@section('meuPerfil')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Meu Perfil</h1>
        <h3>Veja as informações de seu perfil no site</h3>
        <p>É possível visualizar e editar as suas informações abaixo.</p>
    </header>

    <!-- Informações do Perfil -->

    <main>
        <div id="detalhesPerfil">
            <i class="fas fa-user-circle fa-8x fa-fw" style="float: left;"></i>
            <h3 class="formatacaoDestaque">Nome do Usuário</h3>
            <p>emaildeexemplo@provedor.com.br</p>
            <p><i class="fas fa-map-marker-alt fa-fw"></i>Cidade, UF - <i class="fas fa-coins fa-fw"></i>999... pontos</p>
        </div>
        <a class="btn btn-primary formatacaoDestaque"><i class="fas fa-edit fa-fw"></i>EDITAR INFORMAÇÕES</a>
        <a class="btn btn-primary formatacaoDestaque formatacaoEspecialBotaoResponsivo"><i class="fas fa-key fa-fw"></i>EDITAR SENHA</a>
        <a class="btn btn-danger formatacaoDestaque formatacaoEspecialBotaoResponsivo"><i class="fas fa-trash fa-fw"></i>EXCLUIR CONTA</a>
    </main>

    <!-- Atenção: as páginas individuais para cada aspecto do perfil não seriam mais necessárias -->

@endsection