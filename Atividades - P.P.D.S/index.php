<html>
<title></title>
<head>
<script>
alert("Email: silderbrabo@ifet.com e senha: souosilder");
</script>
</script>
<body>
<?php
session_start();
if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    echo $_SESSION['aviso']=" ";
}
?>
	
	Entre com o seu login!<br>

	<form action="site1.php" method="POST">
	<label>
		Nome de usuario:
		<input type="text" name="nome">
	<br>
		E-mail:
		<input type="email" name="email">
	<br>
		Senha:
		<input type="password" name="senha">
	<br>
	<input type="submit" name="enviar">
</body>
</html>