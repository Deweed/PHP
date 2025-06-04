<?php
echo "(())Atividade de desenvolvimento de sistemas.<br>";
$data = array(
    "1" => "27",
    "2" => "junho",
    "3" => "2021",
);
echo "Hoje e quarta-feira, dia ". $data['1']. " de ". $data['2']. " de ". $data['3']. ". <br>";
echo "Fim! <br>";
echo "<br>";

echo "(())As atividades a seguir sao do questionario de linguagens e tecnicas de programacao. <br>";
echo " 1 - Crie um array multidimencional de carros onde o indice sera a marca(Vw, GM, Fiat, Ford) e para cada uma dessas marcas/posicoes adicione 4 veiculos. ";
echo "Depois imprima o carro 3 da Vw, o carro 1 da Fiat e o carro 2 da Ford. <br>" ;
$Vw = array(
	"1" => "Carro 1 Vw", 
	"2" => "carro 2 Vw",
	"3" => "Carro 3 Vw",
	"4" => "carro 4 Vw",
);

echo $Vw['3']. "<br>";

$GM = array(
	"1" => "Carro 1 GM", 
	"2" => "carro 2 GM",
	"3" => "Carro 3 GM",
	"4" => "carro 4 GM",
);


$Fiat = array(
	"1" => "Carro 1 Fiat", 
	"2" => "carro 2 Fiat",
	"3" => "Carro 3 Fiat",
	"4" => "carro 4 Fiat",
);

echo $Fiat['1']. "<br>";

$Ford = array(
	"1" => "Carro 1 Ford", 
	"2" => "Carro 2 Ford",
	"3" => "Carro 3 Ford",
	"4" => "carro 4 Ford",
);

echo $Ford['2']. "<br>";
echo "Fim! <br>";
echo "<br>";

echo " 2 - Crie um array e inclua os 3 paises a seguir, sendo que a abreviacao devera ser o indice. Depois imprima todos os paises. BRA-Brasil, EUA-Estados Unidos, ING-Inglaterra. <br>";
$pais = array(
    "BRA" => "Brasil",
    "EUA" => "Estados Unidos",
    "ING" => "Inglaterra",
);

foreach ($pais as $key => $value){
    echo $key."-".$value."<br>";
}
echo "Fim! <br>";
echo "<br>";

echo " 3 - Crie um array contendo 3 frutas. Utilize o recurso foreach e imprima as tres frutas. <br>";
$frutas = array(
    "1" => "Laranja",
    "2" => "Bergamota",
    "3" => "Lima"

);
foreach ($frutas as $nome) {
    echo $nome."<br>";

}
echo "Fim! <br>";
echo "<br>";

echo" 4 -  Crie um array que contenha 5 carros.Imprima o carro na posicao 3. Inclua mais 5 carros nesse mesmo array e imprima agora o carro da posicao 8. <br>";
$carrosfive = array(
    "1" => "HB20 ",
    "2" => "Onix",
    "3" => "3 - Fox",
    "4" => "Monza",
    "5" => "Chevette",

);

echo $carrosfive['3'];
echo "<br>";

$carrossix = array(
	"6" => "Gol quadrado",
    "7" => "Gol bolinha",
    "8" => " 8 - Fuscao Preto",
    "9" => "Uninho",
    "10" => "Uno de firma"
);

echo $carrossix['8'];
echo "<br>";
echo "Fim! <br>";
echo "<br>";
?>