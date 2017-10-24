<?php
require_once("../config.php");

if (isset($_POST['enviar'])) {
  $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
  $descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
  $estado = (int) $_POST['estado'];

  $sql = "INSERT INTO categorias (nome, descricao, estado)
  VALUES ('{$nome}','{$descricao}',$estado);";

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-categorias.php?sucesso=Adicionado+com+sucesso!");
  } else {
		echo("Descrição do Erro: " . mysqli_error($conexao));
		die();
	}
}
