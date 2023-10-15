 <?php 
include '../conexao.php';

$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);

$query = $link->query("select * from forum where cod_forum=".$id);
$inf = mysqli_fetch_assoc($query);


$_SESSION['ed'] = $inf['conteudo'];
header('Location:../mostrarPublicacao.php');

?>