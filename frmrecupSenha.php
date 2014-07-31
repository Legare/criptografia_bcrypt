<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Recuperar a senha</title>
                <meta charset="UTF-8">
	        
 </head>
<body>
    
 
    
   
<h1>Recuperar senha</h1>
<form id="meu_form" action="recuperarSenha.php" method="post" >
           
		<!--Login:<br />-->
                
                <label>Digite seu email </label><br/>
                <input type="text" name="login" id="login" />
		<br />
                  
		Senha:<br />
		<input type="password" name="senha" id="senha"/><br />
                <label>Confirme a Senha</label><br/>
		<input type="password" name="confsenha" id="confsenha"/><br />
                Aceito os termos e condições:<br />
		<input type="checkbox" name="termos" id="termos"><br />
		<input type="submit" value="Recuperar" />
	</form>
<br/><br/>


		 <div class="loader" style="display: none;"><img src="images/loader.gif" alt="Carregando" /></div>
                 
</body>
</html>




