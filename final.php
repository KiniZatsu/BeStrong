<?php 
session_start();
if(!$_SESSION['email']) {
	header('Location: login.php');
	exit();
}
include_once'../conexao.php';
$query = $link->query("SELECT nome FROM usuario WHERE email = '".$_SESSION['email']."'");

$linha = mysqli_fetch_assoc($query);


 ?>
 
		<h2>Olá, <?php echo $linha ['nome'] ; ?></h2>
		<h2><a href="logout.php">Sair</a></h2> 
