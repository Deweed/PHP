<?php
include "conexao.php";
include "executa_sql.php";
$sql="Select * From contato, cidade where codigo_contato='$_POST[fcodigo_contato]'";
$resposta=executa_sql($sql, $conexao);
while (($registro= mysql_fetch_array($resposta))) {
	echo "<hr> Contato: ".$registro['codigo_contato'];
	echo "<hr> Nome: ".$registro['nome_contato'];
	echo "<hr> Data de Nascimento: ".$registro['data_nascimento'];
	echo "<hr> Telefone: ".$registro['telefone'];
	echo "<hr> Celular: ".$registro['celular'];
	echo "<hr> E-mail: ".$registro['email'];
	echo "<hr> Endereço: ".$registro['endereco'];
	
	$sql="Select * from cidade where codigo_cidade='$_POST[fcodigo_contato]'";
	$resposta=executa_sql($sql, $conexao);
	while (($registro=mysql_fetch_array($resposta))) {
		echo "<hr> Cidade: ".$registro['codigo_cidade']."," .$registro['nome_cidade'].",". $registro['estado'].
		",". $registro['pais'],"<br>";
		echo "<font face='arial' size='2' color='green'>
		<a href='principal.php'> Pagina Inicial </a></font>";
		exit;
	}
	exit;
}
?>