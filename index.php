<?php

include_once 'model/Conexao.class.php';
include_once 'model/Gerenciador.class.php';

$gerenciador = new Gerenciador();

?>

<!DOCTYPE html>
<html>
	<head>
		<?php include_once 'view/dependencias.php'; ?>
	</head>
<body>
	<div class="container">
  		<div style="background:#fff !important" class="jumbotron">
			<h2 class="text-center"> Lista de Clientes <span class="fa fa-users"></span></h2>

			<h5 class="text-right">
				<a href="view/pagina_registro.php" class="btn btn-primary btn-xs">
					<span class="fa fa-user-plus"></span>
				</a>
			</h5>

		<div class="table-responsive">
			<table class="table table-hover">
				<thead class="thead-dark">
					<tr>
						<th>Código do cliente</th>
						<th>Nome do cliente</th>
						<th>Endereço de origem</th>
						<th>Endereço de destino</th>
						<th>Telefone</th>
						<th colspan="3">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($gerenciador->listClient("clientes") as $client): ?>
					<tr>
						<td><?php echo $client['id']; ?></td>
						<td><?php echo $client['nome']; ?></td>
						<td><?php echo $client['endereco1']; ?></td>
						<td><?php echo $client['endereco2']; ?></td>
						<td><?php echo $client['fone']; ?></td>
					<td>
						<form method="POST" action="view/pagina_atualizacao.php">

						<input type="hidden" name="id" value="<?=$client['id']?>"/>

							<button class="btn btn-warning btn-xs">
								<span class="fa fa-user-edit"></span>
							</button>
						</form>
					</td>
					<td>
						<form method="POST" action="controller/deleta_cliente.php" onclick="return confirm('Tem certeza que deseja excluir ?');">

							<input type="hidden" name="id" value="<?=$client['id']?>"/>


							<button class="btn btn-danger btn-xs">
								<span class="fa fa-trash"></span>
							</button>
						</form>
					</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

</body>
</html>