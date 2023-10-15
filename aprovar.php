<?php 

	include 'conexao.php';
	$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT); 
	$querySelect = $link->query("update forum set aprovacao= 'Aprovado' where cod_forum=".$id);
	header('Location:../');




 ?>