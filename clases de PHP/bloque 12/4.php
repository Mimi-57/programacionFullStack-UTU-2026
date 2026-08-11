<?php

$numeros = [10, 20, 30, 40, 50];

$suma = 0;

for ($i = 0; $i < count($numeros); $i++){
    $suma = $suma + $numeros[$i];
}

echo "La suma con for es: " . $suma . "\n";

$suma2 = array_sum($numeros);

echo "La suma con el Array_sum es: " . $suma2;
?>