<!DOCTYPE html>
<html>
<body>

<?php
$precoProduto1 = 100.00;
$precoProduto2 = 150.00;

$descontoProduto1 = $precoProduto1 * 0.08;
$descontoProduto2 = $precoProduto2 * 0.11;

$precoFinal1 = $precoProduto1 - $descontoProduto1;
$precoFinal2 = $precoProduto2 - $descontoProduto2;

echo "Valor final do primeiro produto: R$ " . number_format($precoFinal1, 2, ',', '.') . "\n";
echo "Valor final do segundo produto: R$ " . number_format($precoFinal2, 2, ',', '.') . "\n";
?>

</body>
</html>