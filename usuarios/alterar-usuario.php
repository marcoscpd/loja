<?php
require_once("../config.php");

$id = (int) $_POST['id'];
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$endereco = mysqli_real_escape_string($conexao, $_POST['endereco']);
$nivel_de_acesso = mysqli_real_escape_string($conexao, $_POST['nivel_de_acesso']);

$sql = "UPDATE usuarios
        SET nome='{$nome}',
            email='{$email}',
            endereco='{$endereco}',
            nivel_de_acesso='{$nivel_de_acesso}'
        WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

if($resultado){
  header("Location:listar-usuarios.php?sucesso=Alterado+com+Sucesso!");
  die();
} else {
	echo("Descrição do Erro: " . mysqli_error($conexao));
	die();
}
