@extends('layouts.basico')
@section('titulo', $titulo) 

@section('formatacaoMinhasGincanas')

	.row {

		margin: 0px 20px 20px 20px;

	}   

	.segundaLinhaBotoes {

		margin-top: 5px;

	}

	.collapseRegras {

		margin-bottom: 15px;

	}

	.gincanaEncerrada {

		color: red;

	}

	header p {

		margin-bottom: 0px;

	}

@endsection

@section('minhasGincanas')

	<!-- Cabeçalho do corpo da página -->

	<header>
		<h1 class="formatacaoDestaque">Minhas Gincanas</h1>
		<h3>Você está participando de 2 gincanas</h3>
		<p>Para ver as gincanas que você criou, clique <a href="{{ route('usuario.gincanasQueCriei') }}">aqui</a>.</p>
	</header>

	<!-- Cards das gincanas que eu participo -->

	<main>
		<div class="row row-cols-1 row-cols-md-3 g-4">
			<div class="col">
				<div class="card text-center shadow-sm">
					<img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana 1">
					<div class="card-body">
						<h3 class="card-title formatacaoDestaque">Gincana #1</h3>
						<h5><i class="fas fa-stopwatch fa-fw"></i>00:00:00</h5>
						<p class="card-subtitle mb-2"><strong>Descrição</strong></p>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
						<p>
							<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana1" aria-expanded="false" aria-controls="collapseRegrasGincana1"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
						</p>
						<div class="collapse collapseRegras" id="collapseRegrasGincana1">
							<div class="card card-body">
								<p class="card-subtitle mb-2"><strong>Regras</strong></p>
								Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
							</div>
						</div>
						<a class="btn btn-primary formatacaoDestaque" href="{{ route('site.questoesGincanas') }}"><i class="fas fa-gamepad fa-fw"></i>JOGAR</a>
						<a class="btn btn-primary formatacaoDestaque formatacaoEspecialBotaoResponsivo" href="{{ route('site.rankingGincana') }}"><i class="fas fa-medal fa-fw"></i>RANKING</a>
						<a class="btn btn-primary formatacaoDestaque formatacaoEspecialBotaoResponsivo"><i class="fas fa-ticket-alt fa-fw"></i>GERAR CUPOM</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card text-center shadow-sm">
					<img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana 2">
					<div class="card-body">
						<h3 class="card-title formatacaoDestaque">Gincana #2</h3>
						<h5 class="gincanaEncerrada"><i class="fas fa-stopwatch fa-fw"></i>GINCANA ENCERRADA!</h5>
						<p class="card-subtitle mb-2"><strong>Descrição</strong></p>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
						<p>
							<button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegrasGincana2" aria-expanded="false" aria-controls="collapseRegrasGincana2"><i class="fas fa-chevron-down fa-fw"></i><strong>CLIQUE PARA VER MAIS</strong></button>
						</p>
						<div class="collapse collapseRegras" id="collapseRegrasGincana2">
							<div class="card card-body">
								<p class="card-subtitle mb-2"><strong>Regras</strong></p>
								Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
							</div>
						</div>
						<a class="btn btn-primary formatacaoDestaque" href="{{ route('site.rankingGincana') }}"><i class="fas fa-medal fa-fw"></i>RANKING</a>
						<a class="btn btn-success formatacaoDestaque formatacaoEspecialBotaoResponsivo"><i class="fas fa-check fa-fw"></i>CUPOM JÁ RESGATADO!</a>
					</div>
				</div>
			</div>
		</div>
	</main>

@endsection