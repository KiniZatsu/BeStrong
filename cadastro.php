<?php 
include_once '../includes/header.inc.php';
include 'conexao.php';
if(!$_SESSION['cod']) {
	header('Location: ../Login/login.php');
	exit();
}?>
 		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/create.php" method="post" class="col s12">
				<?php 
					if (isset($_SESSION['erro_forum'])):
						echo $_SESSION['erro_forum'];
						unset($_SESSION['erro_forum']);
					endif;
					$selectTema = $link->query('select distinct te.descricao, te.cod_tema from tema te inner join forum fo on te.cod_tema = fo.cod_tema order by te.cod_tema;');
					while($regTemas = $selectTema->fetch_assoc()):
						echo "<fieldset class='formulario' style='padding:15px;margin-bottom: 50px;'>
							<legend><img src='../imagens/logo.png' alt='[imagem]' width='100'></legend>";
						echo "<p><h5 class='light center'>Tema ".$regTemas['descricao']."</h5></p>";
						// PEGA O ASSUNTO
						$select = $link->query('select distinct usu.nome, fo.cod_forum, fo.conteudo, fo.data_postagem, fo.cod_tema from usuario usu inner join forum fo on usu.Cod_usuario = fo.Cod_usuario order by fo.cod_tema;');
						$cod2 = $regTemas['cod_tema'];
						while($registros = $select->fetch_assoc()):
							$id = $registros['cod_tema'];
							$nome = $registros['nome'];
							$conteudo = $registros['conteudo'];
							$data = $registros['data_postagem'];
							if($id == $cod2):	
								echo "<!-- Campo Do Assunto -->
									<div class='input-field col s12 z-depth-3'>
										<legend>".$nome." ".$data."</legend>
								        <div class='input-field col s12'>
								        	<i class='material-icons prefix'>mode_edit</i>
								             <textarea id='assunto' name='assunto' class='materialize-textarea' data-length='250'>".$conteudo."</textarea>
								            <label for='assunto'>Assunto</label>
								        </div>
								      </div>";
							
							$cod = $registros['cod_forum'];
						    $selectComent = $link->query('select distinct mo.comentario, mo.data_comentario, fo.cod_forum from forum_mostrar mo inner join forum fo on mo.cod_forum = fo.cod_forum order by data_comentario;');
						    while($registros2 = $selectComent->fetch_assoc()):
								$var = $registros2['cod_forum'];
								$comentario = $registros2['comentario'];
								$dataComentario = $registros2['data_comentario'];
								if ($var == $cod):	
								    echo"
									<!-- Campo Do Comentario -->
									<div class='input-field col s10 z-depth-3'>
								        <legend>".$dataComentario."</legend>
								        <div class='input-field col s12'>
								        	<i class='material-icons prefix'>comment</i>
								             <textarea id='comentario' name='comentario'class='materialize-textarea' data-length='250'>".$comentario."</textarea>
								            <label for='comentario'>Comentario</label>
								        </div>
								      </div>";
								endif;
							endwhile;
							endif;
						endwhile;
					echo"<!-- BOTOES -->
							<div class='input-field col s12'>
								<input type='submit' value='enviar' class='btn-small waves-effect waves-light teal lighten-1'>
								<input type='reset' value='limpar' class='btn-small waves-effect waves-light red lighten-1'>
							</div>";
					echo "</fieldset>";	
					endwhile;
					?>
				 
			</form>
		</div>
<?php include_once '../includes/footer.inc.php' ?>