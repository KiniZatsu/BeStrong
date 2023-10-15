<?php
 
include_once '../conexao.php';

$querySelect = $link->query("select forum.*, usuario.* from forum inner join usuario on forum.Cod_usuario = usuario.Cod_usuario where email='".$_SESSION['email']."'");
$row = mysqli_num_rows($querySelect);
if ($row >= 1):
	while ($inf = mysqli_fetch_assoc($querySelect)):
		echo "<tr>";
		echo "<td>".$inf['nome']."</td><td>".$inf['data_postagem']."</td><td>".$inf['aprovacao']."</td>";
		echo"<td><a href='mostrar_msg.php/?id=".$inf['cod_forum'].">";
		echo "<i class='material-icons'>assignment_ind</i><?php echo </a></td></table>";	
		echo "</tr>";
	endwhile;
else:
	echo "</table><center>Não ha publicações.</center>";
endif;	
 ?>