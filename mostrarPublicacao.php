 <?php
include '../conexao.php';
include '../includes/headerUs.php';
?>
<main>
<div class="row container">
  <div class="col s12">
      <?php
          $querySelect = $link->query("select fo.*, usu.*, te.* from forum fo inner join usuario usu on fo.Cod_usuario = usu.Cod_usuario inner join tema te on fo.cod_tema = te.cod_tema where usu.Cod_usuario='".$_SESSION['cod']."'");
          $row = mysqli_num_rows($querySelect);
          if ($row >= 1):            
              echo "<h5 class='light'>Consultas</h5><hr><table class='striped'><thead><tr><th>Assunto</th>
          <th>Data de Publicação</th><th>Aprovação</th></tr></thead><tbody>";
          if (isset($_SESSION['ed'])):
              echo $_SESSION['ed'];
              unset($_SESSION['ed']);
          endif;
          while ($inf = mysqli_fetch_assoc($querySelect)):
            echo "<tr><td>".$inf['descricao']."</td><td>".$inf['data_postagem']."</td><td>".$inf['aprovacao']."</td>";
            echo"<td><a href='mostrar_msg.php/?id=".$inf['cod_forum']."'>";
            echo "<i class='material-icons right'>assignment_ind</i>Mostrar Postagem</a></td></tr>"; 
          endwhile;
            echo "</tbody></table>";
          else:
            echo "<h5 class='flow-text center' style='padding-top: 20px;'>Não ha publicações.</h5>";
          endif;  
      ?>
  </div>
</div>
</main>

<?php 
include_once '../includes/footer.inc.php';
?>