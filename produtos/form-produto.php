<?php
require_once("../config.php");

//buscar categorias
$sql = "SELECT * FROM categorias WHERE estado = 1 ORDER BY nome";
$categoriasNoBancoDeDados = mysqli_query($conexao, $sql);

//buscar marcas
$sql = "SELECT * FROM marcas WHERE estado = 1 ORDER BY nome";
$marcasNoBancoDeDados = mysqli_query($conexao, $sql);

//Trazendo o header HTML para a página
require_once("../includes/header.php");
require_once("../includes/menu.php");

?>

<div class="container">
	<h3>Cadastrar Novo Produto</h3>
	<form action="produtos/create-produto.php" method="post">
		<div class="row">

			<div class="col-md-8">
				<div class="form-group">
					<label>Nome:</label>
					<input type="text" name="nome" class="form-control">
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<label>Quantidade</label>
					<input type="number" name="quantidade" class="form-control">
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<label>Imagem</label>
					<input type="file" name="imagem" class="form-control">
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					<label>Valor R$</label>
					<input type="text" name="valor" class="form-control text-right" id="valor">
				</div>
			</div>

			<div class="col-md-3">
				<label>Data de Validade</label>
				<div class="input-group date">
				    <input type="text" name="data_validade" class="form-control" id="calendario" data-date-format="dd/mm/yyyy">
				    <div class="input-group-addon">
				        <span class="glyphicon glyphicon-th"></span>
				    </div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					<label>Categoria</label>
					<select class="form-control" name="categoria_id">
						<?php while ($categoria = mysqli_fetch_object($categoriasNoBancoDeDados)) { ?>
							<option value="<?php echo $categoria->id ?>"><?php echo $categoria->nome ?></option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					<label>Marca</label>
					<select class="form-control" name="marca_id">
						<?php while ($marca = mysqli_fetch_object($marcasNoBancoDeDados)) { ?>
							<option value="<?php echo $marca->id ?>"><?php echo $marca->nome ?></option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<label>Nome:</label>
					<textarea name="descricao" class="form-control" id="summernote"></textarea>
				</div>
			</div>

<div class="col-md-12">
			<div class="form-group">
				<input type="submit" name="enviar" value="Enviar" class="btn btn-success">
			</div>
</div>

		</form>
	</div> <!-- fom do row -->
</div> <!-- fom do container -->

<?php require_once("../includes/footer.php"); ?>
