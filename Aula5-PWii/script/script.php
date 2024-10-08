<?php

$peso = 300;

$altura = 130;
$alturaXAltura = $altura * $altura;
$imc =  $alturaXAltura / $peso  ;
echo $imc;
echo "<br>";




if($imc < 18.5){

    echo"Você esta em estado de magreza";

}
    
elseif($imc >= 18.5 and $imc < 25){
    echo "Classificação NORMAL";

}

elseif($imc >= 25 and $imc < 30){
    echo "Classificação Obesidade Grau 1";

}
elseif($imc >= 30 and $imc < 40){
    echo "Classificação Obesidade Grau 2";

}

elseif( $imc >= 40){
    echo "Classificação Obesidade grave,  Grau 3";

}


?>