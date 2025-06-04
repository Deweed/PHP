<?php
function CPF($cpf) { 
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    if (strlen($cpf) != 11) {
        return false;
    }

    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}
echo "=>Esse Valida o CPF:<= <br>";
$cpf = "345.115.898-10";
if(CPF($cpf)){
	echo "CPF Aceito <br>";
} else{
	echo "CPF Cancelado <br>";
}
echo "<br>";
echo "=>Esse Valida a data:<= <br>";

function Data($dat){
	$data = explode("/","$dat"); 
	$d = $data[0];
	$m = $data[1];
	$y = $data[2];
 
	$res = checkdate($m,$d,$y);
	if ($res == 1){
	   echo "Esta tudo ok!";
	} else {
	   echo "Algo Invalido!";
	}
} 
Data("24/11/2003")

?>