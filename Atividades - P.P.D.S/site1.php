
<?php
session_start();
	$nome_cli=$_POST['nome'];
	$email_cli=$_POST['email'];
	$senha_cli=$_POST['senha'];
	
	$em="silderbrabo@ifet.com";
	$se= "souosilder";


	if($email_cli==$em && $senha_cli==$se){
	    $expira=time() + (86400000 * 60);
		setcookie('usuario',$nome_cli,$expira);
		header('location:nada.php');
	} 
	else {
		$_SESSION['aviso']="Tu num é o silder não hein!!!";
		header( 'location:index.php');
		exit;
	}

?> 