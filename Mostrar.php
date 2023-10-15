<?php session_start();
include '../conexao.php';
 


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
</head>
	<body>
 <div class="navbar-fixed">  
  <nav class="white" role="navigation">
      <div class="nav-wrapper container">
          <div class="brand-logo brown-text text-darken-2"> Pagina do Usuario</div>
      <ul class="right hide-me-on-down">
        <li><a href="index.php"><i class="material-icons left">account_circle</i>Cadastro</a></li>
        <li><a href="consultas.php"><i class="material-icons left">search</i>Consultas</a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="index.php"><i class="material-icons left">account_circle</i>Cadastro</a></li>
        <li><a href="consultas.php"><i class="material-icons left">search</i>Consultas</a></li>
      </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      
    </div>
  </nav>
</div>

<div class="row container">
  <div class="col s12">
    <h5 class="light">Consultas</h5><hr>
    <table class="striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Data de Publicação</th>
          <th>Aprovação</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          include 'banco_de_dados/select.php';
         ?>
      </tbody>
    </table>
  </div>
</div>


<?php 
include_once '../includes/footer.inc.php';
?>