<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title> Documento PHP </title>
<?php
include "conexao.php";
include "executa_sql.php";
?>
</head>
<body>
<?php
echo "<form action='confirma.php' method=POST>
<h2>Digite o código para confirmar a exclusão do cliente</h2>
<input name='codigo' type='text' size=30><br>
<input type='submit' value='Confirmar Exclusão' OnClick='alert('Exclusão Realizada')'>
<form>";
?>
</body>
</html>