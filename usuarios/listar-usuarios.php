<?php
require_once("../config.php");

	//busca linhas da tabela tipos
	$sql = "SELECT * FROM usuarios ORDER BY nome";
	$resultado = mysqli_query($conexao, $sql);

	require_once("../includes/header.php");
	require_once("../includes/menu.php");
?>


	<div class="container">
		<div class="row">
			<h3>Listar Usuários no Sistema</h3>
			<hr>

			<?php if(isset($_GET['sucesso'])): ?>
				<div class="alert alert-success alert-dismissible" role="alert">
					<button type="button" class="close"
					data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
					<?php echo $_GET['sucesso']; ?>
				</div>
			<?php endif; ?>

			<a href="usuarios/form-usuario.php" class="btn btn-success botao-new">+ Adicionar uma novo Usuário</a>
		</div> <!-- end row -->
	</div> <!-- end header -->

	<section class="container">
		<div class="row">

			<table class="table table-striped table-hover">
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Email</th>
					<th>Senha</th>
					<th>Endereço</th>
					<th>Nível de Acesso</th>
					<th>Ações</th>
				</tr>

				<?php
				// começo do loop while
				while ($usuario = mysqli_fetch_object($resultado)) { ?>
					<tr>
						<td><?php echo $usuario->id ?></td>
						<td><?php echo $usuario->nome ?></td>
						<td><?php echo $usuario->email ?></td>
						<td><?php echo $usuario->senha ?></td>
						<td><?php echo $usuario->endereco ?></td>
						<td><?php echo $usuario->nivel_de_acesso?></td>
						<td>
							<?php
								echo ($usuario->nivel_de_acesso === "GERENTE")
								? "<i class='fa fa-lock text-warning' aria-hidden='true'></i>"
								: "<i class='fa fa-user text-info' aria-hidden='true'></i>";
							?>
						</td>
						<td>
							<div class="btn-group">
								<a href='usuarios/editar-usuario.php?id=<?php echo $usuario->id ?>'
									class='btn btn-default btn-xs'>
									Editar
								</a>
								<a href='#'
										class='btn btn-warning btn-xs'
										data-toggle="modal" data-target="#<?php echo $usuario->id ?>">
										Excluir
								</a>
							</div>

							<!-- Modal -->
							<div class="modal fade" id="<?php echo $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title text-danger" id="myModalLabel">Excluir Registro</h4>
										</div>
										<div class="modal-body">
											Tem certeza que deseja excluir o registro
											<strong><?php echo $usuario->nome ?> </strong>
											permanentemente do Banco de Dados? <br>
											<strong class="text-danger">Observação: Essa ação não poderá ser revertida.</strong>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
											<a href='usuarios/excluir-usuario.php?id=<?php echo $usuario->id ?>'
												class="btn btn-danger" id="confirm" >Excluir
											</a>
										</div>
									</div>
								</div>
							</div>

						</td>
					</tr>
				<?php } // fim do loop while ?>
				</table>
			</div>  <!-- end row -->
		</section> <!-- end section -->

<?php require_once("../includes/footer.php"); ?>
