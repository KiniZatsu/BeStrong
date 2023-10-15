	<?php 
		session_start();

		include '../conexao.php';


		$email = filter_input(INPUT_POST,'login', FILTER_VALIDATE_EMAIL);
		$senha = filter_input(INPUT_POST,'senha', FILTER_SANITIZE_SPECIAL_CHARS);

		// Validação do usuario normal e parceiro
		$sql = $link->query("select* from usuario where email = '".$email."' and senha ='".$senha."'");
		$cod = mysqli_fetch_assoc($sql);
 		$row = mysqli_num_rows($sql);

 		// Validação do Adm
 		$adm = $link->query("select * from usuario where email ='".$email."' and senha='".$senha."'and tipo='ADM'");
		$row1 = mysqli_num_rows($adm);

		if ($row1 == 1) {
			$_SESSION['adm'] = $email;
			header('Location: ../ADM');		
		}else{
			if ($row==1) {
				$end = $link->query("select Cod_endereco from endereco where cod_usuario='".$cod['Cod_usuario']."'");
				$ed = mysqli_fetch_assoc($end);
				$_SESSION['cod'] = $cod ['Cod_usuario'];
				$_SESSION['end'] = $ed ['Cod_endereco'];
				header('Location:../');
				exit();
			}else{
				$erro = $link->query("select* from usuario where email = '".$email."'");
				$row1 = mysqli_num_rows($erro);
				if ($row1 == 1) {
					$_SESSION['erro_login'] = "<p class= 'center red-text'>Senha incorreta.</p>";
					header('Location:login.php');
				}else{
				$_SESSION['erro_login'] = "<p class= 'center red-text'>Email não cadastrado.</p>";
				header('Location:login.php');
				}
			}
			}




	?>