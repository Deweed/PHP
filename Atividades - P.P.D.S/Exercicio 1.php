<?php
 $n = 65;
 $divisores = 0;
 
for($c=2; $c<$n; $c++)
 if($n % $c == 0){
  echo "Multiplo de $c <br />";
  $divisores++;
 }

if($divisores)  
	echo "Alem de $divisores divisores , ele se divide por 1 e ele mesmo, entao nao e primo";
else    
	echo "So e divisivel por ele mesmo e 1, entao ele e primo ";

?>
