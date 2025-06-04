<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$conexao = mysql_connect($host, $usuario, $senha) or die ("Não foi possivel conectar
com o servidor de banco de dados!");
$banco = mysql_select_db("agenda", $conexao) or die ("Não foi possivel abrir
o banco de dados!");
?>