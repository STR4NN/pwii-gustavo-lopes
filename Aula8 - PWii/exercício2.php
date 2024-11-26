<!DOCTYPE html>
<html>
<body>

<?php
$valor1 = 5;
$valor2 = 10;

if ($valor1 > $valor2) {
    list($valor1, $valor2) = array($valor2, $valor1);
}

echo "Intervalo entre os valores: ";
for ($i = $valor1; $i <= $valor2; $i++) {
    echo $i . " ";
}
?>

</body>
</html>