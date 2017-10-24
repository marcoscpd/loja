<?php
require_once("../config.php");

//buscar o id do produto, que está vindo da página de listagem.
$id = (int) $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);
$produto = mysqli_fetch_object($resultado);

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
	<h3>Editar Produto</h3>
	<small class="text-success">Produto cadastrado em <?php echo dataMysqlParaPtBr($produto->data_cadastro) ?></small>
	<form action="produtos/alterar-produto.php" method="post">

		<input type="hidden" name="id" value="<?php echo $produto->id?>">

		<div class="row">

			<div class="col-md-8">
				<div class="form-group">
					<label>Nome:</label>
					<input type="text" name="nome" class="form-control" value="<?php echo $produto->nome ?>">
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<label>Quantidade</label>
					<input 	type="number"
					name="quantidade"
					class="form-control"
					value="<?php echo $produto->quantidade ?>">
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<label>Imagem</label>
					<input 	type="file"
					name="imagem"
					class="form-control"
					value="<?php echo $produto->imagem ?>">
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group">
					<label>Valor R$</label>
					<input 	type="text"
					name="valor"
					class="form-control text-right"
					value="<?php echo moedaEmReais($produto->valor) ?>" id="valor">
				</div>
			</div>

			<div class="col-md-2">
				<label>Data de Validade</label>
				<div class="input-group date">
					<input 	type="text"
					name="data_validade"
					class="form-control"
					value="<?php echo dataMysqlParaPtBr($produto->data_validade) ?>"
					id="calendario"
					data-date-format="dd/mm/yyyy">
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
							<option value="<?php echo $categoria->id ?>"
								<?php echo ($categoria->id === $produto->categoria_id) ? "selected >" : ">" ?>
								<?php echo $categoria->nome ?>
							</option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<label>Marca</label>
					<select class="form-control" name="marca_id">
						<?php while ($marca = mysqli_fetch_object($marcasNoBancoDeDados)) { ?>
							<option value="<?php echo $marca->id ?>"
								<?php echo ($marca->id === $produto->marca_id) ? "selected >" : ">" ?>
								<?php echo $marca->nome ?>
							</option>
						<?php } ?>
					</select>
				</div>
			</div>

			<div class="col-md-2">
				<div class="form-group">
					<label>Estado</label>
					<select class="form-control" name="estado">
						<?php if ($produto->estado == 1): ?>
							<option value="0">Desativado</option>
							<option value="1" selected="">Ativado</option>
						<?php else : ?>
							<option value="0" selected="">Desativado</option>
							<option value="1">Ativado</option>
						<?php endif; ?>
					</select>
				</div>
			</div>

			<div class="col-md-12">
				<div class="form-group">
					<label>Nome:</label>
					<textarea name="descricao" class="form-control" id="summernote">
						<?php echo $produto->descricao ?>
					</textarea>
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
