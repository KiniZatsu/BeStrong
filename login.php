<?php 
	  include_once '../includes/header.inc.php';
	  if (isset($_SESSION['cod'])) {
	  	header('Location:final.php');
	  }
?>
		
	<!-- FORMULARIO -->
	<div class="row container">
	
		<form action="loginLogica.php" method="post" class="col s12">
			<fieldset class="formulario" style="margin-top:5px;margin-bottom: 50px;">
				<legend><img src="../imagens/logo.png" alt="[imagem]" width="100"></legend>
				<h5 class="light center" style="font-size: 55px;margin-bottom:5%;font-weight: normal;">LOGIN</h5>
				<center>
				<?php 
					if (isset($_SESSION['erro_login'])):
						echo $_SESSION['erro_login'];
						session_unset();
					endif;?>
				<!-- CAMPO EMAIL -->
				<div class="input-field col s6 offset-s3">
					<i class="material-icons prefix">email</i>
					<input type="email" name="login"id="login" maxlength="40" required>
					<label for="email">Login</label>
				</div>
				<p></p>
				<!-- CAMPO SENHA -->
				<div class="input-field col s6 offset-s3 ">
					<i class="material-icons prefix">https</i>
					<input type="password" name="senha" id="senha" maxlength="16" required>
					<label for="Senha">Senha</label>
				</div>
				<!-- BOTOES -->
					<div class="input-field col s12 light center" style="margin-top: 40px;">
						<input type="submit" value="Entrar" class="btn teal ligthen-1  waves-light btn-large white-text">
					</div>
				</center>
			</fieldset>
		</form>
	</div>


<?php include_once '../includes/footer.inc.php';?>