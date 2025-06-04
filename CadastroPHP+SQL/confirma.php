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
$codigo = $_POST['codigo'];
$sql = "delete from contato where codigo_contato='$_POST[fcodigo_contato]'";
$resultado = mysql_query($sql) or die ("Não foi possivel realizar a consulta
no banco de dados.");
echo "<h2> Cliente excluido com Sucesso!</h2>";
?>
</body>
</html>