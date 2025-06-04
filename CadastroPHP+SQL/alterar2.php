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
$codigo=$_POST['codigo'];
$sql = "select * from contato where codigo_contato='$$_POST[fcodigo_contato]'";
$resultado = mysql_query($sql) or die ("Não foi possivel realizar 
a consulta ao banco de dados.");
echo "<h1> Alterar Cadastro... </h1>
	<hr> <br>
	<form action='alterardb.php?codigo_contato='$_POST[fcodigo_contato]' method='POST'>
		Código do Cliente:
		<input name='codigo_new' type='text' value='$codigo_contato' size=30>*<br>
		Nome do cliente:
		<input name='nome_new' type='text' value='$nome_contato' size=30>*<br>
		Endereço do Cliente: 
		<input name='endereco_new' type='text' value='$endereco' size=30>*<br>
		Telefone do Cliente:
		<input name='telefone_new' type='tel' value='$telefone' size=30>*<br>
		
		<input type='submit' value='Alterar' OnClick='alert('Alteração Concluida')'>
	</form><br><hr>";
?>
</body>
</html>