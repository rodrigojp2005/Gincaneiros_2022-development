<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
	<div class="container-fluid">
		<span class="navbar-brand formatacaoDestaque">Gincaneiros</span>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#barraNavegacao" aria-controls="barraNavegacao" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="barraNavegacao">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item"><a class="nav-link active" href="{{ route('site.principal') }}">Início</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('site.contato') }}">Contato</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('site.sobreNos') }}">Sobre Nós</a></li>
				<li class="nav-item"><a class="nav-link" href="{{ route('site.ajuda') }}">Ajuda</a></li>
			</ul>
			<ul class="navbar-nav">
				<!--
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" id="navbarOpcoesUsuario" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="fas fa-user-circle"></i>
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarOpcoesUsuario">
						<li><h6 class="dropdown-header">Minhas Informações</h6></li>
						<li><a class="dropdown-item" href="{{ route('usuario.meuPerfil') }}"><i class="fas fa-user fa-fw"></i>Meu Perfil</a></li>						
					  	<li><a class="dropdown-item" href="{{ route('usuario.gincanasQueParticipo') }}"><i class="fas fa-gamepad fa-fw"></i>Gincanas que Participo</a></li>
						<li><a class="dropdown-item" href="{{ route('usuario.gincanasQueCriei') }}"><i class="fas fa-gamepad fa-fw"></i>Gincanas que Criei</a></li>
						<li><a class="dropdown-item" href="{{ route('usuario.meusCupons') }}"><i class="fas fa-ticket-alt fa-fw"></i>Meus Cupons</a></li>							
					</ul>
			  	</li>
				-->
				<li class="nav-item" id="botaoLogin"><a class="btn btn-primary formatacaoDestaque" href="{{ route('site.login') }}"><i class="fas fa-sign-in-alt fa-fw"></i>ENTRAR</a></li>
				<!-- <li class="nav-item"><a class="btn btn-outline-primary formatacaoDestaque" href="#"><i class="fas fa-sign-out-alt fa-fw"></i>SAIR</a></li> -->
			</ul>
		</div>
	</div>
</nav>