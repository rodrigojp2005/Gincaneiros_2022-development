@extends('layouts.basico')
@section('titulo', $titulo) 

@section('formatacaoPrincipal')

	.row {

		margin: 0px 20px 20px 20px;

	}

	#carrosselInformativo {

		margin: 20px 20px 0px 20px;
		height: 500px;

	}

	.imagemCarrosselInformativo {

		height: 500px;

	}

@endsection

@section('home')

	<main>

		<!-- Carrossel informátivo -->

		<div id="carrosselInformativo" class="carousel slide carousel-fade" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carrosselCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{ asset('img/temporary1.jpg') }}" class="imagemCarrosselInformativo d-block w-100" alt="Imagem do Carrossel Informátivo #1">
				</div>
				<div class="carousel-item">
					<img src="{{ asset('img/temporary2.jpg') }}" class="imagemCarrosselInformativo d-block w-100" alt="Imagem do Carrossel Informátivo #2">
				</div>
				<div class="carousel-item">
					<img src="{{ asset('img/temporary3.jpg') }}" class="imagemCarrosselInformativo d-block w-100" alt="Imagem do Carrossel Informátivo #3">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carrosselInformativo" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Anterior</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carrosselInformativo" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Próximo</span>
			</button>
		</div>

		<!-- Cards da página inicial -->

		<div class="row row-cols-1 row-cols-md-2 g-4">
			<div class="col">
				<div class="card text-center h-100 shadow-sm">
					<img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana Empresarial">
					<div class="card-body">
						<h3 class="card-title formatacaoDestaque">Gincanas Empresariais</h3>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum nulla quae dolorem iusto id, cupiditate soluta quam, ab, dicta rerum iure nemo in quibusdam praesentium laudantium dolores. Rem, velit illum.</p>
						<a class="btn btn-primary formatacaoDestaque" href="{{ route('site.gincanasEmpresariaisAtivas') }}"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGOS</a>
						<a class="btn btn-primary formatacaoDestaque formatacaoEspecialBotaoResponsivo" href="{{ route('site.criarGincanaEmpresarial') }}"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA EMPRESARIAL</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card text-center h-100 shadow-sm">
					<img src="{{ asset('img/temporary.jpg') }}" class="imagemDestaqueCard card-img-top" alt="Foto de destaque da Gincana Pessoal">
					<div class="card-body">
						<h3 class="card-title formatacaoDestaque">Gincanas Pessoais</h3>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ea expedita exercitationem commodi atque eius et perspiciatis accusantium obcaecati ad officia, illo, nostrum dicta quidem voluptate, vero at qui! Officia!</p>
						<a class="btn btn-primary formatacaoDestaque" href="{{ route('site.gincanasPessoaisAtivas') }}"><i class="fas fa-gamepad fa-fw"></i>DISPUTAR JOGOS</a>
						<a class="btn btn-primary formatacaoDestaque formatacaoEspecialBotaoResponsivo" href="{{ route('site.criarGincanaPessoal') }}"><i class="fas fa-plus fa-fw"></i>CRIAR GINCANA PESSOAL</a>
					</div>
				</div>
			</div>
		</div>

	</main>

@endsection
