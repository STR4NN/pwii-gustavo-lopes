<?php

$peso = 75;
$altura = 1.75;
$alturaXAltura = $altura * $altura;


$imc =   $peso / $alturaXAltura   ;


echo $imc;
echo "<br>";

switch($imc){
    
    case $imc < 18.5:
    echo"Você esta em estado de magreza";
    break;

    case $imc < 25:
    echo "Classificação normal";
    break;
    
    case  $imc < 30:
    echo "Classificação Obesidade Grau 1";
    break;

    case  $imc < 40:
    echo "Classificação Obesidade Grau 2";
    break;

    case   $imc > 40:
    echo "Classificação Obesidade grave,  Grau 3";
    break;


default:
echo "Valor invalido";
}

?>