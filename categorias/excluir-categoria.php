<?php
require_once("../config.php");
$id = (int) $_GET['id'];
$sql = "DELETE FROM categorias WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
if($resultado){
  header("Location:listar-categorias.php?sucesso=Excluído+com+Sucesso!");
  die();
}
