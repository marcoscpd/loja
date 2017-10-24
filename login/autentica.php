<?php

$emailFicticio = "marcos@oi.com";
$senhaFicticia = "123456";

$email = $_POST["email"];
$senha = $_POST["senha"];

if ($email == $emailFicticio && $senha == $senhaFicticia){
  session_start();
  $_SESSION["email"] = $email;
  $_SESSION["nome"] = "Marcos";
  header("Location:principal.php");
} else {
  header("Location:formulario.php");
}

?>
