<html>
<title></title>
<head></head>
<body>
<table border="20px"; heigth=100%; width=100% bgcolor="darkred"><tr><td >

<div  style='text-align:center;margin-left:0%;width:100%;height:15%;background: lightyellow;'>

<?php
  
    if (isset($_COOKIE['user'])) {
		$exibicao= $_COOKIE['user'];
		echo "<h2>Ola, $exibicao<h2>";
    }
?>  
<a href="index.php"><input type="button" value="Sair"></a>
</div>     

<div style='position:right;background:lightblue; width:20%;height:100%;'>
 <nav><ul><center><table border="0px";>
<tr> <td><li><a href=#contate ><H2>CONTATE</H2></a></li></td> <td></td></tr>
<tr> <td><li><a href=#endere ><H2>MEUS DADOS</H2></a></li></td> </tr>

<div id=contate style='position:right;background:lightgreen; width:100%;height:100%;'>

<?php
if (isset($_COOKIE['ail'])) {
    $exibi= $_COOKIE['ail'];
    echo "<h2>Usando o email $exibi<h2>";
 }
?>

<a href="tehcazita@gmail.com?body=sugestoes ou criticas">Envie o email aqui</a>
<form method="POST">
<textarea name="sugestao" style="width:400px;height:200px;" ></textarea>
</form>

</div>

<div id=endere style='position:right;background: green; width:100%;height:100%;'>
<?php
if (isset($_COOKIE['ail'])) {
    $exibi= $_COOKIE['ail'];
    echo "<h2>Seu email e: $exibi<h2>";
 }
 if (isset($_COOKIE['fone'])) {
    $fone= $_COOKIE['fone'];
    echo "<h2>Seu telefone e: $fone<h2>";
 }else{
     echo "<h2>TELEFONE NAO LISTADO!</h2>";
 }
 if (isset($_COOKIE['dereco'])) {
    $dereco= $_COOKIE['dereco'];
	echo "<h2>Seu endereco e: $dereco<h2>";
 }else{
	echo "<h2>ENDERECO NAO LISTADO!</h2> ";
 }

?>
</body></html>