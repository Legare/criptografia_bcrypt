<?php
echo '<meta charset=UTF-8>';
include_once 'classes/Bcrypt.class';
include_once 'conexao/conecta.inc';
 
$nome = $_POST['nome'];
$email = $_POST['login'];
$senha = $_POST['senha'];
$tipo = 'RES';
$senha = Bcrypt::hash($senha);
$query = "INSERT INTO usuario (NOME_USUARIO,EMAIL_USUARIO,SENHA_USUARIO,TIPO_USUARIO)";
$query.= " VALUES('$nome','$email','$senha','$tipo')";

if(mysql_query($query))
    echo '<script>alert ("Sucesso !");location.href="frmlogin.php";</script>';
else 
    echo mysql_error ().'<br/><a href=frmcadastro.php>Voltar</a>';
