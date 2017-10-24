<?php
require_once("../config.php");

if (isset($_POST['enviar'])) {

	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);

  $sql = "INSERT INTO transportadoras (nome)
  VALUES ('{$nome}');";

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-transportadoras.php?sucesso=Adicionado+com+sucesso!");
  } else {
		echo("Descrição do Erro: " . mysqli_error($conexao));
		die();
	}
}
