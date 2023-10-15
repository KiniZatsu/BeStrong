 <?php
include_once '../conexao.php';

$querySelect = $link->query("select *.forum ,*.usuario from usuario inner join forum on usuario.Cod_usuario = forum.cod_usuario where email='".$_SESSION['email']."'");

while ($inf = mysqli_fetch_assoc($querySelect)):
	echo "<tr>";
	echo "<td>".$inf['nome']."</td><td>".$inf['data_postagem']."</td>";
	echo"<td><a href='mostra_msg.php/?id=".$inf['cod_forum']."'><i class='material-icons'>assignment_ind</i>";	
	echo "</a></td></tr>";
endwhile;
 ?>