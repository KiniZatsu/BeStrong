<?php 
	session_start();

	include '../../conexao.php';

	$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
	$email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
	$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_NUMBER_INT);
	$confsenha = filter_input(INPUT_POST,'confsenha', FILTER_SANITIZE_NUMBER_INT);
	// CAMPOS DA TABELA ENDEREÇO
	$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS);
	$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);

	$clinica = filter_input(INPUT_POST,'clinica',FILTER_SANITIZE_SPECIAL_CHARS);

	$verificar = filter_input(INPUT_POST,'verificar', FILTER_SANITIZE_NUMBER_INT);

	$select = $link->query("select senha from usuario where email='".$email."'");
	$ver = mysqli_fetch_assoc($select);

	if ($verificar <> $ver['senha']) {
		$_SESSION ['ed'] =" <p class= 'center red-text'>Senha Incorreta<br></p>";
		header("Location:../editar.php");
		exit();
	}

	$upUs = $link->query("update usuario set nome='".$nome."', email='".$email."',senha='"      .$senha."' where email='"  .$email."'");

	$upEd = $link->query("update endereco set nome_rua='".$rua."',bairro='".$bairro."',cidade='"    .$cidade."' where cod_usuario =".$_SESSION['cod'] );
	
	$upCl =	$link->query("update clinicas set nome_clinica='".$clinica."'");

	$_SESSION ['ed'] = "<p class= 'center green-text'>Dados Editados<br></p>";
	header("Location:../");
 ?>