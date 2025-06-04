<?php
function executa_sql($sql, $conexao) {
	if (empty ($sql) OR !($conexao)) {
		return 0;
	}
	if (!($resposta=@mysql_query($sql, $conexao))) {
		echo "<p align='center'> Erro na execução do comando SQL! </p>";
		exit;
	}
	return $resposta;
}
?>
