<!DOCTYPE html>
<html>
<body>

<?php

$celsius = 25;
$fahrenheit = (9 * $celsius + 160) / 5;

echo "Temperatura em Fahrenheit: " . number_format($fahrenheit, 2, ',', '.') . "°F\n";
?>

</body>
</html>