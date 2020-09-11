<?php  

include_once '../model/Conexao.class.php';
include_once '../model/Dados.class.php';

$dados = new Dados();

$data = $_POST;

if(isset($data) && !empty($data)) {
	$dados->inserir("registros", $data);
	
	header("Location: ../index.php?client_add_success");
}

?>