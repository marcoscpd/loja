<div class="container" id="topo">
	<h2 class="topo-h1">
		Loja do Programador Web
	</h1>
</div>

<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home-sistema.php">
				<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
					 Área Administrativa
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="home-sistema.php">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="categorias/form-categoria.php">Nova Categoria</a></li>
						<li><a href="categorias/listar-categorias.php">Listar Categorias</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="marcas/form-marca.php">Nova Marca</a></li>
						<li><a href="marcas/listar-marcas.php">Listar Marcas</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produtos <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="produtos/form-produto.php">Novo Produto</a></li>
						<li><a href="produtos/listar-produtos.php">Listar Produtos</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transportadora <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="transportadoras/form-transportadora.php">Nova Transportadora</a></li>
						<li><a href="transportadoras/listar-transportadoras.php">Listar Transportadoras</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário <span class="caret"></span></a>
					<ul class="dropdown-menu">

						<?php if (isset($_SESSION["nome_usuario"]) && $_SESSION["nivel_usuario"] == "GERENTE") : ?>
							<li><a href="usuarios/form-usuario.php">Novo Usuário</a></li>
							<li><a href="usuarios/listar-usuarios.php">Listar Usuários</a></li>
						<?php endif; ?>

						<li><a href="#">Trocar Senha</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="logicaDeAutenticacao/deslogar.php">Sair do Sistema</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
