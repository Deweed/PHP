<!DOCTYPE HTML>
<html lang="pt-br">
<html>
<head>
<meta charset="UTF-8">
<title> Cadastro de Contatos </title>
<link rel="stylesheet" type="text/css" href="bordas.css" />
</head>
<body>

<center><div id="area">	
	<form name='cadastra_contato' method='post' action="cadastra_contato.php">
	<font face="arial" size="2"><b>
		<fieldset>
			<legend><font face="arial" size="3"><b> Cadastro de Contatos </b></font></legend>
			Nome: 
				<input type="text" name="fnome_contato" size="28"><br>
			Nascimento:
				<input type="text" name="fdata_nascimento" size="23"><br>
			Telefone:
				<input type="text" name="ftelefone" size="26"><br>
			Celular:
				<input type="text" name="fcelular" size="27"><br>
			E-mail:
				<input type="text" name="femail" size="28"><br>
			Endereço: 
				<input type="text" name="fendereco" size="25"><br>
			Codigo_Cidade:
				<input type="text" name="fcidade" size="20"><br><br><br><br><br>
				
			<input type="submit" value="Cadastrar" name="acao" OnClick="alert('Cadastro Realizado')">
			<input type="reset" value="Cancelar" name="B2"><br>
		</fieldset>
	</font></form>
</div></center>
<?php
include "conexao.php";
include "executa_sql.php";
$sql= "select * from cidade";
$resposta= executa_sql($sql, $conexao);
echo '<select name="fcidade" size="1"><option value="0"> Escolha uma cidade </option>';
while (list($codigo_cidade, $nome_cidade, $estado, $pais) = mysql_fetch_array($resposta)) {
	echo '<option value="'.$codigo_cidade.'">'.$nome_cidade.'</option>';
}
echo '</select>';
?>
<?php
if ((Empty($_POST['fnome_contato'])) or (Empty($_POST['fdata_nascimento'])) ) {
	echo "<form class:'voltar'><input type='button' id='voltar' value='voltar' OnClick='history.go(-1)'></form>";
} else {
	$sql="insert into contato(nome_contato, data_nascimento, telefone, celular, email, endereco, codigo_cidade)
	values ('$_POST[fnome_contato]', '$_POST[fdata_nascimento]','$_POST[ftelefone]' '$_POST[fcelular]', 
	'$_POST[femail]','$_POST[fendereco]','$_POST[fcidade]')";
	executa_sql($sql, $conexao);
	echo "<br>";
	echo "<font face='arial' size='2' color='green'><b> Cadastro realizado com sucesso! <;b></font><br>";
	echo "<font face='arial' size='2'><a href='principal.php'> Página inicial </a></font><br>";
}
?>
</body>
</html>