<?php
	include_once '../includes/header.inc.php';
?>
<!-- FORMULARIO -->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/create.php" method="post" class="col s12">
				<fieldset class="formulario" style="padding:15px;margin-bottom: 50px;">
					<legend><img src="../imagens/logo.png" alt="[imagem]" width="100"></legend>
					<h5 class="light center">Cadastro</h5>
					<?php 
						if (isset($_SESSION['erro_Us'])):
							echo $_SESSION['erro_Us'];
							unset($_SESSION['erro_Us']);
						endif;
					?>
					<!-- CAMPO NOME -->
					<div class="input-field col s6">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
						<label for="nome">Nome</label>
					</div>
					<!-- CAMPO EMAIL -->
					<div class="input-field col s6">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email"id="email" maxlength="40" required>
						<label for="email">Email</label>
					</div>
					<!-- CAMPO SENHA -->
					<div class="input-field col s6">
						<i class="material-icons prefix">https</i>
						<input type="password" name="senha" id="senha" maxlength="16" required>
						<label for="Senha">Senha</label>
					</div>
					<!-- CAMOO CONFSENHA -->
					<div class="input-field col s6">
						<i class="material-icons prefix">https</i>
						<input type="password" name="confsenha" id="confsenha" maxlength="16" required>
						<label for="Confirmar Senha">Confirmar Senha</label>
					</div>
					<!-- CAMPO CEP -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">map</i>
					 	<input type="text" name="cep" id="cep" maxlength="40" required onblur="pesquisacep(this.value);">
					 	<label for="Cep">CEP</label>
					 </div>
					 <!-- CAMPO RUA -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">add_location_alt</i>
					 	<input type="text" name="rua" id="rua" maxlength="40" required>
						<label for="Rua">Rua</label>
					 </div>
					 <!-- CAMPO BAIRRO -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">add_location_alt</i>
					 	<input type="text" name="bairro" id="bairro" maxlength="40" required>
					 	<label for="Bairro">Bairro</label>
					 </div>
					 <!-- CAMPO ESTADO -->
					 <div class="input-field col s6">
					 	<i class="material-icons prefix">map</i>
					 	<input type="text" name="uf" id="uf" maxlength="40" required>
					 	<label for="uf">Estado</label>
					 </div>
					 <!-- CAMPO CIDADE -->
					 <div class="input-field col s12">
					 	<i class="material-icons prefix">map</i>
					 	<input type="text" name="cidade" id="cidade" maxlength="40" required>
					 	<label for="Cidade">Cidade</label>
					 </div>
					 <!-- BOTOES -->
					<div class="input-field col s12">
						<input type="submit" value="cadastrar" class="btn-large waves-light teal lighten-1">
						<input type="reset" value="limpar" class="btn-large  waves-light red lighten-2">
					</div>
				</fieldset>
			</form> 
		</div>
<?php include_once '../includes/footer.inc.php' ?>