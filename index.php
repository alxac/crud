<?php  

include_once 'model/Conexao.class.php';
include_once 'model/Dados.class.php';

$dados = new Dados();

?>
<!DOCTYPE html>
<html>
<head>
	<?php include_once 'lib/dependencias.php'; ?>
</head>
<body>

<div class="container">
	
	<h2 class="text-center">
		Lista <i class="fa fa-list"></i>
	</h2>

	<h5 class="text-right">
		<a href="view/novo.php" class="btn btn-primary btn-xs">
			<i class="fa fa-user-plus"></i>
		</a>
	</h5>

	<div class="table-responsive">
		<table class="table table-hover">
			<thead class="thead">
				<tr>
					<th>ID</th>
					<th>NOME</th>
					<th>E-MAIL</th>
					<th>CPF</th>
					<th>DT. DE NASCIMENTO</th>
					<th>ENDEREÇO</th>
					<th>TELEFONE</th>
					<th colspan="3">AÇÕES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($dados->listar("registros") as $usuario): ?>
				<tr>
					<td><?php echo $usuario['id']; ?></td>
					<td><?php echo $usuario['name']; ?></td>
					<td><?php echo $usuario['email']; ?></td>
					<td><?php echo $usuario['cpf']; ?></td>
					<td><?php echo $usuario['nascimento']; ?></td>
					<td><?php echo $usuario['endereco']; ?></td>
					<td><?php echo $usuario['telefone']; ?></td>
					<td>
						<form method="POST" action="view/atualizar.php">
							
							<input type="hidden" name="id" value="<?=$usuario['id']?>">

							<button class="btn btn-warning btn-xs">
								<i class="fa fa-user-edit"></i>
							</button>

						</form>
					</td>
					<td>
						<form method="POST" action="controller/deletar.php" onclick="return confirm('Você tem certeza que deseja excluir ?');">
							
							<input type="hidden" name="id" value="<?=$usuario['id']?>">

							<button class="btn btn-danger btn-xs">
								<i class="fa fa-trash"></i>
							</button>

						</form>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

</div>

</body>
</html>