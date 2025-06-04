<?php 
	$n=6.5;
	$m=7;
	$media="($n + $m) / 2";

	if($media<=3):
		echo "O seu desempenho foi PESSIMO.";

	elseif($media<=5):
		echo "O seu desempenho foi RUIM.";

	elseif($media<=7):
		echo "O seu desempenho foi MEDIO.";

	elseif($media<=8):
		echo "O seu desempenho foi BOM.";

	elseif($media>=8):
		echo "O seu desempenho foi EXCELENTE.";
	endif;
	?>	
	