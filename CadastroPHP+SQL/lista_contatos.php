<!DOCTYPE HTML>
<html lang="pt-br">
<html>
<head>
<meta charset="UTF-8">
<title> Abrindo o Banco de Dados </title>
<?php
include "conexao.php";
?>
<link rel="stylesheet" type="text/css" href="bordas.css" />
</head>
<body>
<h3> Listagem de Contatos </h3>
<?php
$busca=mysql_query("Select * From contato") or die ("Erro ao realizar a busca: ".mysql_error());
while ($reg=mysql_fetch_assoc($busca)) {
	echo "<hr>";
	echo"<br> Código: ".$reg['codigo_contato'];
	echo"<br> Nome: ".$reg['nome_contato'];
	echo"<br> Telefone: ".$reg['telefone'];
	echo"<br> Celular: ".$reg['celular'];
	echo"<br> E-mail: ".$reg['email'];
	echo"<br> Endereço: ".$reg['endereco'];
	echo"<br> Código da Cidade: ".$reg['codigo_cidade'];
}
mysql_free_result($busca);
mysql_close($conexao);
?>
</body>
</html>