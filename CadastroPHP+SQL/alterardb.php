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
$codigo_contato =$_POST['codigo_new'];
$nome_contato =$_POST['nome_new'];
$endereco =$_POST['endereco_new'];
$telefone =$_POST['telefone_new'];

$sql ="Update contato(nome_contato, data_nascimento, telefone, celular, email, endereco)
	values ('$_POST[fnome_contato]', '$_POST[fdata_nascimento]','$_POST[ftelefone]' '$_POST[fcelular]', 
	'$_POST[femail]','$_POST[fendereco]')";
executa_sql($sql, $conexao);

$resultado = mysql_query($sql) or die ("Não foi possivel a conexão com o 
banco de dados.");
echo "<h1> Dados do cliente foram alterados com sucesso!>/h1>";
?>
</body>
</html>