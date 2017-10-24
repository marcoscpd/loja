<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8">
	<title>Loja Programador Web - Dashboard</title>
	<base href="http://localhost/loja/">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- include summernote css-->
	<link href="recursos/summernote/summernote.css" rel="stylesheet">
	<!-- include calendário css-->
	<link href="recursos/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet">

	<link rel="stylesheet" href="recursos/css/loja.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-4"></div>

			<div class="col-lg-4">

				<?php if(isset($_GET['erro_autenticacao'])): ?>
					<div class="alert alert-danger alert-dismissible" role="alert">
						Email ou Senha não conferem. <br>
						Por favor, tente novamente.
					</div>
				<?php endif; ?>

				<h2 class="text-muted text-center">
					<i class="fa fa-sign-in" aria-hidden="true"></i> Autenticar
				</h2>

				<form action="logicaDeAutenticacao/autenticar.php" method="post">
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control" placeholder="Informe o seu Email">
					</div>

					<div class="form-group">
						<label>Senha</label>
						<input type="password" name="senha" class="form-control" placeholder="***********">
					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-success btn-block" name="autenticar_user" value="Entrar">
					</div>

				</form>
			</div>

			<div class="col-lg-4"></div>
		</div>
	</div>
</body>
</html>
