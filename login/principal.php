<?php
session_start();
if (!isset($_SESSION["email"])){
  header("Location:formulario.php");
}

?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Principal</title>
  </head>
  <body>
    <h2> Página Principal do Sistema.</h2>
    <h1> Bem vindo usuário <?php echo $_SESSION["email"]; ?></h1>
    <hr>
    <ul>
       <li>PHP</li>
       <li>SQL</li>
       <li>JavaScript</li>
       <li>HTML</li>
       <li>CSS</li>
    </ul>
  </body>
</html>
