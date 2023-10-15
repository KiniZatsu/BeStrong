<?php 
	include '../includes/headerUs.php';
?>
		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/editarUs.php" method="post" class="col s12">
				<fieldset class="formulario" style="padding:15px;margin-bottom: 50px;">
					<legend><img src="../imagens/logo.png" alt="[imagem]" width="100"></legend>
					<h5 class="light center">Editar</h5>
					<?php 
					    if (isset($_SESSION['ed'])):
					       	echo $_SESSION['ed'];
					       	unset($_SESSION['ed']);
					    endif;
					?>
					<!-- CAMPO NOME -->
					<div class="input-field col s6">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" value="<?php echo $inf['nome']; ?>"name="nome" id="nome" maxlength="40" required autofocus>
						<label for="nome">Nome do Parceiro</label>
					</div>
					<!-- CAMPO EMAIL -->
					<div class="input-field col s6">
						<i class="material-icons prefix">email</i>
						<input type="email" value="<?php echo $inf['email']; ?>"name="email"id="email" maxlength="40" required>
						<label for="email">Email do Parceiro</label>
					</div>
					<!-- CAMPO SENHA -->
					<div class="input-field col s6">
						<i class="material-icons prefix">https</i>
						<input type="password" name="senha" id="senha" maxlength="16" required>
						<label for="Senha">Senha</label>
					</div>
					<!-- CAMPO CONFSENHA -->
					<div class="input-field col s6">
						<i class="material-icons prefix">https</i>
						<input type="password" name="confsenha" id="confsenha" maxlength="16" required>
						<label for="Confirmar Senha">Confirmar Senha</label>
					</div>
					 <!-- CAMPO RUA -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">add_location_alt</i>
					 	<input type="text" value="<?php echo $inf['nome_rua']; ?>" name="rua" id="rua" maxlength="40" required>
						<label for="Rua">Rua</label>
					 </div>
					 <!-- CAMPO BAIRRO -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">add_location_alt</i>
					 	<input type="text" value="<?php echo $inf['bairro']; ?>"name="bairro" id="bairro" maxlength="40" required>
					 	<label for="Bairro">Bairro</label>
					 </div>
					 <!-- CAMPO CIDADE -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">map</i>
					 	<input type="text" value="<?php echo $inf['cidade']; ?>"name="cidade" id="cidade" maxlength="40" required>
					 	<label for="Cidade">Cidade</label>
					 </div>
					 <?php 
					 	if ($inf['tipo'] == 'Usuario Parceiro') :
					 	$end = $link->query("select nome_clinica from clinicas  where cod_endereco =".$_SESSION['end']);
              			$ed = mysqli_fetch_assoc($end);	
					 ?>
					 <!-- CAMPO NOME CLINICA -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">add_business</i>
					 	<input type="text" value="<?php echo $ed['nome_clinica']; ?>"name="clinica" id="clinica" maxlength="40" required>
					 	<label for="Clinica">Clínica</label>
					 </div>
					<?php endif; ?>
					<div class="input-field col s6">
					 	<i class="material-icons prefix">https</i>
					 	<input type="password" name="verificar" id="verificar" maxlength="16" required>
					 	<label for="verificar">Digite a sua senha</label>
					 </div>
					<!-- BOTOES -->
					<div class="input-field col s12 light center">
						<input type="submit" value="Editar" class="btn-large  waves-light teal lighten-1">
					</div>
				</fieldset>
			</form>
		</div>
 <?php include_once '../includes/footer.inc.php' ?>