<?php
require_once("../config.php");

if (isset($_POST['autenticar_user'])) {

	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	if (checaSeUsuarioExisteNoBancoDeDados($conexao, $email, $senha) == true) {
		header("Location:../home-sistema.php");
	} else {
		header("Location:../index.php?erro_autenticacao=true");
	}
}

function checaSeUsuarioExisteNoBancoDeDados($conexao, $email, $senha){
	//pega os usuarios já cadastrados no Banco de Dados
	$sql = "SELECT * FROM usuarios";
	$usuarios = mysqli_query($conexao, $sql);

	//testa se o usuário está cadastrado no banco.
	while ($usuario = mysqli_fetch_object($usuarios)) {
		if ($email === $usuario->email && $senha == $usuario->senha) {
			criaSessaoParaUsuario($usuario->email, $usuario->nome, $usuario->nivel_de_acesso);
			return true;
			break;
		}
	}
	return false;
}

function criaSessaoParaUsuario($emailDoUsuario, $nomeDoUsuario, $nivelDoUsuario){
	session_start();
	if (!(isset($_SESSION['nome_usuario']))) {
		$_SESSION["nome_usuario"] = $nomeDoUsuario;
		$_SESSION["email_usuario"] = $emailDoUsuario;
		$_SESSION["nivel_usuario"] = $nivelDoUsuario;
	}
}
