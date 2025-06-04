<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro Feito</title>
    <meta charset="utf-8">
 <script>

</script>
  </head>
  <body>
    <?php
		$usuario=$_POST['nome'];
		$email=$_POST['email'];
		$senha=$_POST['senha'];
		$cel=$_POST['telefone'];
		$cidade=$_POST['endereco'];
		$sexo=$_POST['sexo'];
		$idade=$_POST['idade'];
	
		echo "<h2><center>Olá $usuario do email $email </center></h2><br>";
	?>
	
	<a href=contate.php style="color: darkpurple"> <h2>Contate</h2></a>

	<div id=dados style='position:right;background:lightblue; width:100%;height:100%;'>
		<?php
			echo "<h2> Esses são seus dados </h2>";
			echo "Nome de Usuario: $usuario <br>";
			echo "E-mail do usuario: $email <br>";
			echo "Número telefonico: $cel <br>";
			echo "Cidade: $cidade <br>";
			echo "Sexo: $sexo <br>";
			echo "idade: $idade <br>";
		?>
	</div>
  </body>
</html>