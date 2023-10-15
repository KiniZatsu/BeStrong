<?php 
  session_start();
  include '../conexao.php';
  $query = $link->query("select usuario.*, endereco.*  from endereco inner join usuario on usuario.Cod_usuario = endereco.cod_usuario where  usuario.Cod_usuario='".$_SESSION['cod']."'");
  $inf = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Be Strong</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style type="text/css">
      body {
          display: flex;
          min-height: 100vh;
          flex-direction: column;
          }
      main {
          flex: 1 0 auto;
          }
  </style>
</head>
  <body>
  <header>
   <div class="navbar-fixed">  
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            
        <ul class="right hide-me-on-down">
        <?php 
          if (!isset($_SESSION['cod'])):
            echo "<li><a href='../CadastroUsuario/index.php'><i class='material-icons left'>account_circle</i>Cadastre-se</a></li>";
            echo "<li><a href='../'><i class='material-icons left'>arrow_back</i>Voltar</a></li>";
          else:
            echo "<li><a href='../CadastroForum/'>Fórum</a></li>";
            echo "<li><a href='../CadastroParceiro/'>Parceiro</a></li>";
            echo "<li><a href='../#secaoDoacoes'>Doações</a></li>";
            echo "<li><a href='../#secaoFrases'>Frases</a></li>";
            echo "<li><a href='../'><i class='material-icons left'>arrow_back</i>Voltar</a></li>";         
          endif
          
        ?>
        </ul>
        <ul id="nav-mobile" class="sidenav">
        <?php
          if (!isset($_SESSION['cod'])):
            echo "<li><a href='../CadastroUsuario/index.php'><i class='material-icons left'>account_circle</i>Cadastre-se</a></li>";
            echo "<li><a href='../'><i class='material-icons left'>replay</i>Voltar</a></li>";
          else:
            echo "<li><a href='../CadastroForum/'>Fórum</a></li>";
            echo "<li><a href='../CadastroParceiro/'>Parceiro</a></li>";
            echo "<li><a href='../#secaoDoacoes'>Doações</a></li>";
            echo "<li><a href='../#secaoFrases'>Frases</a></li>";
            echo "<li><a href='../'><i class='material-icons left'>replay</i>Voltar</a></li>";         
         
          endif;
         ?>
        </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        
      </div>
     </nav>
    </div>
  </header>
