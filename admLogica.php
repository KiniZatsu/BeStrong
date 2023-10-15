<?php 
include_once 'conexao.php';


$querySelect = $link->query('select forum.*, usuario.nome from forum inner join usuario on forum.Cod_usuario = usuario.Cod_usuario ');

while ($registros = $querySelect->fetch_assoc()):
	$id = $registros['cod_forum'];
	$nome = $registros['nome'];
	$conteudo = $registros['Conteudo'];
	$Cod_usuario =  $registros['Cod_usuario'];
	$aprovacao = $registros['aprovacao'];
	$data = $registros['data_postagem'];


	echo "<tr>";
	echo "<td>".$nome."</td><td>".$aprovacao."</td><td>".$data."<td>";
	// echo"<td><a href='banco_de_dados/aprovar.php?id=".$id.">";
	// echo"<i class='material-icons'>assignment_ind</i></a></td>";
	// echo"<td><a href='banco_de_dados/reprovado.php?id=".$id.">";
	// echo "<i class='material-icons'>delete_foreve</i></a>";
	echo "<td><a href='mostrar.php?id=".$id."'</a>Mostrar mensagem</td>";
	echo "</td></tr>";
endwhile;

 ?>