
<?php 
session_start();
include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Be Strong</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
     <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
   <script type="text/javascript" src="js/materialize.min.js"></script>
</head>
  <body>
  <header>
  <div class="navbar-fixed">  
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo"><img src="imagens/logo.png" width="80"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#secaoForum">Fórum</a></li>
            <li><a href="#secaoFrases">Frases</a></li>
            <li><a href="#secaoDoacoes">Doações</a></li>
            <li><a href="#secaoEmocoes">Minhas Emoções</a></li>
            <li><a href="#secaoParceiros">Parceiros</a></li>
            <li><a href="#secaoNos">Sobre Nós</a></li>
  <?php 
            if (isset($_SESSION['cod'])):
              $query = $link->query("SELECT nome from usuario where Cod_usuario='".$_SESSION['cod']."'");
              $linha = mysqli_fetch_assoc($query);
              echo "<li class='drop'>
                <a href='#' class='dropbtn'>Olá ".$linha['nome']."</a>
                <div class='drop-content'>
                <a href='Pagina_Usuario'>Informações Pessoais</a>
                <a href='Pagina_Usuario/mostrarPublicacao.php'>Minhas Publicações</a>
                <a href='Pagina_Usuario/mostrarFrases.php'>Minhas Frases</a>
               <a href='Login/logout.php'>Sair!</a></li>
                </div>
            </li>";    
              else:
                  echo "<li><a href='CadastroUsuario/'>Cadastrar</a></li>
                        <li><a href='Login/login.php'>Entrar<i class='material-icons right'>person_pin</i></a></li></ul>";
              endif; 
           ?> 
  </ul>
  
        <ul id="nav-mobile" class="sidenav">
            <li><a href="#secaoForum">Fórum</a></li>
            <li><a href="#secaoFrases">Frases</a></li>
            <li><a href="#secaoDoacoes">Doações</a></li>
            <li><a href="#secaoEmocoes">Minhas Emoções</a></li>
            <li><a href="#secaoParceiros">Parceiros</a></li>
            <li><a href="#secaoNos">Sobre Nós</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
  </div>
</header>
