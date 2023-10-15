<?php 
	include_once '../includes/header.inc.php';

	include_once '../conexao.php';
	$id = filter_input(INPUT_GET, 'id',FILTER_SANITIZE_NUMBER_INT);

	$querySelect = $link->query("select forum.*, usuario.nome from forum inner join usuario on forum.Cod_usuario = usuario.Cod_usuario where cod_forum=".$id);
	$mostrar = $querySelect->fetch_assoc();
?>

  
    <div class="col s12 m6 12">
    <div class="card blue-grey darken-1" style="margin-left: 70px;margin-right: 70px;margin-top: 30px;">
        <div class="card-content white-text" style="padding-bottom: 150px;">
          <span class="card-title"><center style="font-size: 50px;margin-top: 30px;margin-bottom:30px"><?php 
          echo $mostrar['assunto']?>
          	
          </center></span>
          <p style="margin-top: 70px;margin-left: 50px;margin-right: 50px;font-size: 20px;">
          	<?php
          	 echo $mostrar['Conteudo'];
          	?>
          </p>
        </div>
        <div class="card-action ">
        	<?php 
        echo" <a class='green-text text-light-green accent-4' href='banco_de_dados/aprovar.php?id=".$mostrar['cod_forum']."  style='color:green;''>Aprovar</a>";
        echo "<a class='red-text text-red darken-4'href='banco_de_dados/reprovado.php?id=".$mostrar['cod_forum']."'>Reprovar</a>";  
        ?>
        </div>
      </div>
    </div>
  </div>

  <?php include_once '../includes/footer.inc.php'; ?>