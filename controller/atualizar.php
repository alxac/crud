<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Dados.class.php';

$dados = new Dados();

$update_client = $_POST;
$id = $_POST['id'];

if(isset($id) && !empty($id)) {
	$dados->atualizar("registros", $update_client, $id);

	header("Location: ../index.php?client_update");
}

?>