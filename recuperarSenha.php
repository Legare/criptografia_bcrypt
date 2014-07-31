 <?php
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		include "conexao/conecta.inc";
		mysql_query("UPDATE usuario SET SENHA_USUARIO = $senha,  WHERE EMAIL_USUARIO =  $email") or die(mysql_error()); 

		echo "<p align=center>Senha alterada com sucesso!</p>";
		
		echo "<script language='javascript'>location.href='pedido.php';</script>";