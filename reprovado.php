<?php 

	include_once 'conexao.php';
	$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT); 
	$querySelect = $link->query("update forum set aprovacao= 'Reprovado' where cod_forum=".$id);
	header('Location:../');





 ?>