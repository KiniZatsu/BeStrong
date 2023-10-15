 <?php
include '../conexao.php';
include '../includes/headerUs.php';
?>
<main>
<div class="row container">
  <div class="col s12">
    <?php
        $querySelect = $link->query("select frases.*, usuario.* from frases inner join usuario on frases.cod_usuario = usuario.Cod_usuario where email='".$_SESSION['email']."'");
        $row = mysqli_num_rows($querySelect);
        if ($row >= 1):
          echo "<h5 class='light'>Consultas</h5><hr><table class='striped'><thead><tr><th>Frase</th><th>Data Criação</th><th>Aprovação</th></tr></thead><tbody>";
          while ($inf = mysqli_fetch_assoc($querySelect)):
            echo "<tr>";
            echo "<td>".$inf['nome']."</td><td>".$inf['conteudo']."</td>";
            echo "<i class='material-icons'>assignment_ind</i>";  
            echo "</tr>";
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