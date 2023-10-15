 <?php 
include '../includes/headerUs.php';
?>
<main>
<div class="row container ">
      <p>&nbsp;</p>
      <fieldset class="formulario" style="padding:15px;margin-bottom: 50px;">
        <legend><img src="../imagens/logo.png" alt="[imagem]" width="100"></legend>
        <h5 class="light center" style="margin-bottom:30px;">Informações do Usuario</h5>
          <?php 
            if (isset($_SESSION['ed'])):
              echo $_SESSION['ed'];
              unset($_SESSION['ed']);
            endif;
          ?>
        <div class="col s6">
        <p>Nome: <?php echo $inf['nome'];?></p>
        <p>Email: <?php echo $inf['email'];?></p>
          <?php 
              if ($inf['tipo'] ==  'Usuario Parceiro'):
              $end = $link->query("select nome_clinica from clinicas  where cod_endereco =".$_SESSION['end']);
              $ed = mysqli_fetch_assoc($end);
           ?>
          <p>Clinica: <?php echo $ed ['nome_clinica'];  
          endif;
          ?> 
        </p>
        </div>
        <div class="col s6">
        	<p>Rua: <?php echo $inf['nome_rua']; ?></p>
        	<p>Bairro: <?php echo $inf['bairro']; ?></p>
        	<p>Cidade: <?php echo $inf['cidade']; ?></p>
        </div>
        <div class="light center" >
        <a href="editar.php"class="btn-large waves-effect waves-light teal lighten-1">Editar</a>
        </div>
      </fieldset>
   	</div>
</main>
<?php include_once '../includes/footer.inc.php'; ?>