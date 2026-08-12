<?php

$numeros = [10, 5, 8, 9, 12, 7];

$suma = 0;
$pares = 0;
$impares = 0;

$mayor = $numeros [0];
$menor = $numeros [0];

foreach ($numeros as $numero){
    echo "Estos son los numeros: " . $numero . "\n";

    $suma = $suma + $numero;

    if($numero > $mayor){
        $mayor = $numeros;
    }

    if($numero < $menor){
        $menor = $numeros;
    }

    if($numero % 2 == 0){
        $pares = $pares + 1;
    } else {
        $impares = $impares + 1;
    }
}

$cantidad = count($numeros);
$promedio = $suma / $cantidad;

echo "\n";
echo "La suma de ésto es: " . $suma . "\n";
echo "El promedio es: " . $promedio . "\n";
echo "El mayor es: " . $mayor . "\n";
echo "El menor es: " . $menor . "\n";
echo "Los pares son: " . $pares . "\n";
echo "Los impares son: " . $impares;

?>