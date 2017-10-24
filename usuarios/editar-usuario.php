<?php
require_once("../config.php");

$id = (int) $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id";

$resultado = mysqli_query($conexao, $sql);
$usuario = mysqli_fetch_object($resultado);

require_once("../includes/header.php");
require_once("../includes/menu.php");

?>

  <div class="container">
    <h3>Editar Usuário</h3>

		<form action="usuarios/alterar-usuario.php" method="post">

      <input type="hidden" name="id" value="<?php echo $usuario->id ?>">

			<div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control" value="<?php echo $usuario->nome ?>">
      </div>
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control" value="<?php echo $usuario->email ?>">
			</div>
      <div class="form-group">
        <label>Endereço</label>
        <textarea class="form-control" name="endereco"><?php echo $usuario->endereco ?></textarea>
      </div>
      <div class="form-group">
        <label>Nível de Acesso</label>
        <select class="form-control" name="nivel_de_acesso">
					<?php
						echo ($usuario->nivel_de_acesso === "GERENTE")
						? "<option value='GERENTE' selected=''>Gerente</option><option value='VENDEDOR'>Vendedor</option>"
						: "<option value='GERENTE'>Gerente</option><option value='VENDEDOR' selected=''>Vendedor</option>";
					?>
        </select>
      </div>

      <div class="form-group">
        <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
      </div>
    </form>
  </div>

<?php require_once("../includes/footer.php"); ?>
