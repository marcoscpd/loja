<?php
require_once("../includes/header.php");
require_once("../includes/menu.php");
 ?>

  <div class="container">
    <h3>Cadastrar Usuário</h3>
    <form action="usuarios/create-usuario.php" method="post">
      <div class="form-group">
        <label>Nome:</label>
        <input type="text" name="nome" class="form-control">
      </div>
			<div class="form-group">
				<label>Email:</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Senha:</label>
				<input type="password" name="senha" class="form-control">
			</div>
      <div class="form-group">
        <label>Endereço</label>
        <textarea class="form-control" name="endereco"></textarea>
      </div>
      <div class="form-group">
        <label>Nível de Acesso</label>
        <select class="form-control" name="nivel_de_acesso">
          <option value="GERENTE">Gerente</option>
          <option value="VENDEDOR">Vendedor</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" name="enviar" value="Enviar" class="btn btn-success">
      </div>
    </form>
  </div>

<?php require_once("../includes/footer.php"); ?>
