@extends('layouts.basico')
@section('titulo', $titulo)

@section('formatacaoMeusCupons')

    main {

        margin: 20px;

    }

    td {

        vertical-align: middle;

    }

    tr th {

        vertical-align: middle;

    }

    tr {

        text-align: center;

    }

@endsection

@section('meusCupons')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Meus Cupons</h1>
        <h3>Veja as informações de todos os seus cupons gerados no site</h3>
        <p>É possível visualizar na tabela abaixo se você já resgatou ou não os seus cupons.</p>
    </header>

    <!-- Ranking da gincana -->

    <main>
        <table class="table table-bordered table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">Nome da Gincana</th>
                    <th scope="col">Criador</th>
                    <th scope="col">Posição</th>
                    <th scope="col">Pontos</th>
                    <th scope="col">Desconto</th>
                    <th scope="col">Cupom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Gincana #1</th>
                    <td>Maria Gonçalves</td>
                    <td><i class="fas fa-trophy fa-fw" id="trofeuDourado"></i></td>
                    <td>20</td>
                    <td>100% (R$ 20,00)</td>
                    <td><a class="formatacaoDestaque text-danger"><i class="fas fa-times fa-fw"></i>RESGATAR CUPOM</a></td>
                </tr>
                <tr>
                    <th scope="row">Gincana #2</th>
                    <td>Luana Roberta</td>
                    <td><i class="fas fa-trophy fa-fw" id="trofeuPrata"></i></td>
                    <td>19</td>
                    <td>90% (R$ 19,00)</td>
                    <td><a class="formatacaoDestaque text-success"><i class="fas fa-check fa-fw"></i>CUPOM JÁ RESGATADO</a></td>
                </tr>
            </tbody>
        </table>
    </main>

@endsection