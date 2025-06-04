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
echo "<form action='alterar2.php' method=POST>
<h2>Digite o código para começar a modificar os dados do cliente</h2>
<input name='codigo' type='text' size=15><br>
<input type='submit' value='Confirmar'>
<form>";
?>
</body>
</html>