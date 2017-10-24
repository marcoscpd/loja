<?php
require_once("../config.php");

$id = (int) $_POST['id'];
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$descricao = mysqli_real_escape_string($conexao, $_POST['descricao']);
$estado = (int) $_POST['estado'];

$sql = "UPDATE marcas
        SET nome='{$nome}',
            descricao='{$descricao}',
            estado=$estado
        WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
  header("Location:listar-marcas.php?sucesso=Alterado+com+Sucesso!");
  die();
} else {
	echo("Descrição do Erro: " . mysqli_error($conexao));
	die();
}
