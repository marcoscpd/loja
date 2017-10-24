<?php
require_once("../config.php");

$id = (int) $_POST['id'];
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$data_validade = mysqli_real_escape_string($conexao, dataPtBrParaMysql($_POST['data_validade']));
$valor = mysqli_real_escape_string($conexao, $_POST['valor']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$imagem = mysqli_real_escape_string($conexao, $_POST['imagem']);
$quantidade = (int) $_POST['quantidade'];
$marca_id = (int) $_POST['marca_id'];
$categoria_id = (int) $_POST['categoria_id'];
$estado = (int) $_POST['estado'];


$sql = "UPDATE produtos
        SET nome='{$nome}',
						data_validade = '{$data_validade}',
						valor = '{$valor}',
						descricao='{$descricao}',
						imagem = '{$imagem}',
						quantidade = $quantidade,
						marca_id = $marca_id,
						categoria_id = $categoria_id,
            estado=$estado
        WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-produtos.php?sucesso=Alterado+com+Sucesso!");
  die();
} else {
	echo("Descrição do Erro: " . mysqli_error($conexao));
	die();
}
