@extends('layouts.basico')
@section('titulo', $titulo)

@section('formatacaoValidarCuponsMinhaGincana')

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

@section('validarCuponsMinhaGincana')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Validar Cupons das Minha Gincana</h1>
        <h3>Valide os cupons gerados pela "Gincana #1"</h3>
        <p>É possível validar os cupons gerados por essa gincana na tabela abaixo.</p>
    </header>

    <!-- Ranking da gincana -->

    <main>
        <table class="table table-bordered table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">Posição</th>
                    <th scope="col">Participante</th>
                    <th scope="col">Pontos</th>
                    <th scope="col">Desconto</th>
                    <th scope="col">Situação do Cupom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-trophy fa-fw" id="trofeuDourado"></i></td>
                    <td>José de Alencar</td>
                    <td>20</td>
                    <td>100% (R$ 20,00)</td>
                    <td><a class="formatacaoDestaque"><i class="fas fa-times fa-fw"></i>VALIDAR CUPOM</a></td>
                </tr>
                <tr> 
                    <td><i class="fas fa-trophy fa-fw" id="trofeuPrata"></i></td>
                    <td>Machado de Assis</td>
                    <td>19</td>
                    <td>90% (R$ 19,00)</td>
                    <td><a class="formatacaoDestaque text-success"><i class="fas fa-check fa-fw"></i>CUPOM JÁ VALIDADO</a></td>
                </tr>
            </tbody>
        </table>
    </main>

@endsection