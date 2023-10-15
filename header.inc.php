 <?php session_start(); 
 include'../conexao.php';
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
      <!-- Adicionando Javascript -->
    <script type="text/javascript" >
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</head>
	<body>
  <header>
   <div class="navbar-fixed">  
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            
        <ul class="right hide-me-on-down">
        <?php 
          if (!isset($_SESSION['cod'])):
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