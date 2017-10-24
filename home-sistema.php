<?php
session_start();
if (!isset($_SESSION["nome_usuario"])) {
	header("Location:index.php");
}
 ?>

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
<?php require_once("includes/menu.php"); ?>

  <div class="container">
    <h3 class="alert alert-success">
			Bem vindo usuário <strong><?php echo $_SESSION['nome_usuario'] ?></strong>!
		</h3>
    <hr>
  </div>

<?php require_once("includes/footer.php"); ?>
