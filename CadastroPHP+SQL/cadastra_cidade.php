<!DOCTYPE HTML>
<html lang="pt-br">
<html>
<head>
<meta charset="UTF-8">
<title> Cadastro de Cidades </title>
<link rel="stylesheet" type="text/css" href="bordas.css" />
</head>
<body>
<center><div id="area">	
	
	<form name='cadastra_cidade' method='post' action="cadastra_cidade.php">
	<font face="arial" size="2"><b>
	<fieldset>
		<legend><font face="arial" size="3"><b> Cadastro de Cidades </b></font></legend>
		Cidade: 
			<input type="text" name="fnome_cidade" size="30"><br>
		Estado:
			<input type="text" name="festado" size="30"><br>
		País: &nbsp;&nbsp;&nbsp;
			<input type="text" name="fpais" size="30"><br><br><br><br><br><br><br><br>
			
		<input type="submit" value="Cadastrar" name="acao" OnClick="alert('Cadastro Realizado')">
		<input type="reset" value="Cancelar" name="B2"><br>
	</fieldset>
	</font></form>
</div></center>
<?php
if ((Empty($_POST['fnome_cidade'])) or (Empty($_POST['festado'])) or (Empty($_POST['fpais'])) ){
	echo "<form><input type='button' id='voltar' value='voltar' OnClick='history.go(-1)'></td></form>";
} else {
	include "conexao.php";
	include "executa_sql.php";
	$sql="Insert into cidade(nome_cidade, estado, pais) values ('$_POST[fnome_cidade]', '$_POST[festado]',
	'$_POST[fpais]')";
	executa_sql($sql, $conexao);
	echo"<br>";
	echo"<font face='arial' size='2' color='green'><b> Cadastro Realizado! </b></font><br>";
	echo "<font face='arial' size='2'><a href='principal.php'> Página Inicial </a></font>";
}
?>
</font>
</body>
</html>