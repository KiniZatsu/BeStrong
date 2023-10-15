<?php session_start(); ?>
<?php include_once 'includes/header.inc.php';?>
<?php include_once 'includes/menu.inc.php'; ?>
		<!-- FORMULARIO -->
		<div class="row container">
			<p>&nbsp;</p>
			<form action="banco_de_dados/createUs.php" method="post" class="col s12">
				<fieldset class="formulario" style="padding:15px;margin-bottom: 50px;">
					<legend><img src="imagens/logo.png" alt="[imagem]" width="100"></legend>
					<h5 class="light center">Cadastro</h5>
					<?php 
						if (isset($_SESSION['msg2'])):
							echo $_SESSION['msg2'];
							session_unset();
						endif;
						if(isset($_SESSION['erro_senha2'])):
							echo $_SESSION['erro_senha2'];
							session_unset();
						endif;
					?>
					<!-- CAMPO NOME -->
					<div class="input-field col s12">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="nome" id="nome" maxlength="40" required autofocus>
						<label for="nome">Nome</label>
					</div>
					<!-- CAMPO EMAIL -->
					<div class="input-field col s12">
						<i class="material-icons prefix">email</i>
						<input type="email" name="email"id="email" maxlength="40" required>
						<label for="email">Email</label>
					</div>
					<!-- CAMPO SENHA -->
					<div class="input-field col s12">
						<i class="material-icons prefix">https</i>
						<input type="password" name="senha" id="senha" maxlength="16" required>
						<label for="Senha">Senha</label>
					</div>
					<!-- CAMOO CONFSENHA -->
					<div class="input-field col s12">
						<i class="material-icons prefix">https</i>
						<input type="password" name="confsenha" id="confsenha" maxlength="16" required>
						<label for="Confirmar Senha">Confirmar Senha</label>
					</div>
					 
					<!-- BOTOES -->
					<div class="input-field col s12">
						<input type="submit" value="cadastrar" class="btn blue">
						<input type="reset" value="limpar" class="btn red">
					</div>
				</fieldset>
			</form>
		</div>
		
<?php include_once 'includes/footer.inc.php' ?>