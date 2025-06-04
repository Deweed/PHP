<html>
<head>
<title> AGENDA ON-LINE </title>
</head>
<body>
<center><br>
<font face="arial" size=3><b> Agenda On-Line! <b><br><br>
<?php
$hora=date("H");
if ($hora<=11) {
	echo("Bom Dia!");
}
elseif ($hora>11 and $hora<18) {
	echo ("Boa Tarde!");
} else {
	echo ("Boa Noite!");
}
?>
<br> Seja Bem-Vindo!</font>
</center>

</body>
</html>