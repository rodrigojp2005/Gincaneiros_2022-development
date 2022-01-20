@extends('layouts.basico')
@section('titulo', $titulo) 

@section('formatacaoRankingMinhaGincana') 

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

    #containerBotaoVoltar {

        text-align: center;
        margin: 0px 20px 20px 20px;

    }

    @media (min-width: 0px) and (max-width: 1199.98px) { 

        .btn:first-child {

            margin-bottom: 10px;

        }

    }

@endsection

@section('rankingMinhaGincana')

    <!-- Cabeçalho do corpo da página -->

    <header>
        <h1 class="formatacaoDestaque">Ranking de Gincana</h1>
        <h3>4 usuários estão participando da sua gincana</h3>
        <p>Confira na tabela abaixo as posições dos participantes que estão participando de sua gincana.</p>
    </header>

    <!-- Ranking da gincana -->

    <main>
        <table class="table table-bordered table-striped table-hover table-responsive">
            <thead>
                <tr>
                    <th scope="col">Pos.</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Pontos</th>
                    <th scope="col">Desconto</th>
                    <th scope="col">Cupom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><i class="fas fa-trophy fa-fw" id="trofeuDourado"></i></th>
                    <td>Ana Joanna</td>
                    <td>20</td>
                    <td>100% (R$ 20,00)</td>
                    <td><a class="formatacaoDestaque text-success"><i class="fas fa-check fa-fw"></i>RESGATADO</a></td>
                </tr>
                <tr>
                    <th scope="row"><i class="fas fa-trophy fa-fw" id="trofeuPrata"></i></th>
                    <td>Bob Roberto</td>
                    <td>19</td>
                    <td>90% (R$ 19,00)</td>
                    <td><a class="formatacaoDestaque text-success"><i class="fas fa-check fa-fw"></i>RESGATADO</a></td>
                </tr>
                <tr>
                    <th scope="row"><i class="fas fa-trophy fa-fw" id="trofeuBronze"></i></th>
                    <td>Lucas Martins</td>
                    <td>18</td>
                    <td>80% (R$ 18,00)</td>
                    <td><a class="formatacaoDestaque text-danger"><i class="fas fa-times fa-fw"></i>NÃO RESGATADO</a></td>
                </tr>
                <tr>
                    <th scope="row">4ª</th>
                    <td>Maria Carolina</td>
                    <td>17</td>
                    <td>70% (R$ 17,00)</td>
                    <td><a class="formatacaoDestaque text-danger"><i class="fas fa-times fa-fw"></i>NÃO RESGATADO</a></td>
                </tr>
            </tbody>
        </table>
    </main>

    <!-- Botão de retorno -->
    
    <div id="containerBotaoVoltar">
        <a class="btn btn-outline-danger formatacaoDestaque" href="{{ route('usuario.gincanasQueCriei') }}"><i class="fas fa-arrow-left fa-fw"></i>VOLTAR PARA A PÁGINA DE GINCANAS CRIADAS POR MIM</a>
    </div>

@endsection