<!DOCTYPE html>
<html>
<body>

<?php
$inicio = 15;
$fim = 10;

if ($inicio < $fim) {
    for ($i = $inicio; $i <= $fim; $i++) {
        echo $i . " ";
    }
} else {
    for ($i = $inicio; $i >= $fim; $i--) {
        echo $i . " ";
    }
}
?>

</body>
</html>