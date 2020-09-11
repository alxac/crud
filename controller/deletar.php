<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Dados.class.php';

$dados = new Dados();

$id = $_POST['id'];

if(isset($id) && !empty($id)) {
	$dados->deletar("registros", $id);

	header("Location: ../index.php");
}

?>