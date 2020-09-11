<?php 

include_once '../model/Conexao.class.php';
include_once '../model/Dados.class.php';
include_once '../lib/dependencias.php'; 

$dados = new Dados();

$id = $_POST['id'];

?>

<h2 class="text-center">
	Atualizar <i class="fa fa-user-edit"></i>
</h2><hr>

<form method="POST" action="../controller/atualizar.php">
	
<div class="container">
	<div class="form-row">
		
		<?php foreach($dados->getById("registros", $id) as $usuario): ?>

		<div class="col-md-6">
			Nome: <i class="fa fa-user"></i>
			<input class="form-control" type="text" name="name" required autofocus value="<?=$usuario['name']?>"><br>
		</div>

		<div class="col-md-6">
			E-mail: <i class="fa fa-envelope"></i>
			<input class="form-control" type="email" name="email" required value="<?=$usuario['email']?>"><br>
		</div>

		<div class="col-md-4">
			CPF: <i class="fa fa-address-card"></i>
			<input class="form-control" type="text" name="cpf" required id="cpf" value="<?=$usuario['cpf']?>"><br>
		</div>

		<div class="col-md-4">
			Dt. de Nascimento: <i class="fa fa-calendar"></i>
			<input class="form-control" type="date" name="nascimento" required value="<?=$usuario['nascimento']?>"><br>
		</div>

		<div class="col-md-4">
			Telefone: <i class="fab fa-whatsapp"></i>
			<input class="form-control" type="text" name="telefone" required id="telefone" value="<?=$usuario['telefone']?>"><br>
		</div>

		<div class="col-md-12">
			Endereço: <i class="fa fa-map"></i>
			<input class="form-control" type="text" name="endereco" required value="<?=$usuario['endereco']?>"><br>
		</div>

		<div class="col-md-4">
			
			<input type="hidden" name="id" value="<?=$usuario['id']?>">

			<?php endforeach; ?>

			<button class="btn btn-warning btn-lg">
				
				Atualizar <i class="fa fa-user-edit"></i>

			</button><br><br>

			<a href="../index.php">
				Voltar
			</a>

		</div>

	</div>
</div>

</form>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script> 

<script type="text/javascript">
	$(document).ready(function(){
		$("#cpf").mask("000.000.000-00");
		$("#phone").mask("(00) 0000-0000");
	});
</script>