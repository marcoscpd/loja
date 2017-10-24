<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

	require_once("../config.php");

if (isset($_POST['enviar'])) {
	$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
	$data_validade = mysqli_real_escape_string($conexao, dataPtBrParaMysql($_POST['data_validade']));
	$valor = mysqli_real_escape_string($conexao, moedaParaMySql($_POST['valor']));
	$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
	$imagem = mysqli_real_escape_string($conexao, $_POST['imagem']);
	$quantidade = (int) $_POST['quantidade'];
	$marca_id = (int) $_POST['marca_id'];
	$categoria_id = (int) $_POST['categoria_id'];

  $sql = "INSERT INTO produtos (nome, data_validade, data_cadastro, quantidade, valor, imagem, marca_id, categoria_id, descricao)
  				VALUES ('{$nome}', '{$data_validade}', now(), $quantidade, '{$valor}', '{$imagem}', $marca_id, $categoria_id, '{$descricao}');";

  $resultado = mysqli_query($conexao, $sql);

  if ($resultado) {
  	header("Location:listar-produtos.php?sucesso=Adicionado+com+sucesso!");
  } else {
		echo("Descrição do Erro: " . mysqli_error($conexao));
		die();
	}
}
