<?php
require_once("../config.php");

if (isset($_POST['enviar'])) {
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
	$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
	$nivel_de_acesso = mysqli_real_escape_string($conexao, $_POST['nivel_de_acesso']);

  $sql = "INSERT INTO usuarios (nome, email, senha, endereco, nivel_de_acesso)
  VALUES ('{$nome}','{$email}', '{$senha}', '{$endereco}', '{$nivel_de_acesso}')";
	//echo $sql; die();
  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-usuarios.php?sucesso=Adicionado+com+sucesso!");
  } else {
		echo("Descrição do Erro: " . mysqli_error($conexao));
		die();
	}
}
