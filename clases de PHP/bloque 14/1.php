<?php 

$numeros = [10, 20, 30 ,40, 50];

$suma = 0;

foreach ($numeros as $numero){
    $suma = $suma + $numero;
}

$cantidad = count( $numeros);

$promedio = $suma / $cantidad;

echo "La suma total es de: " . $suma . "\n";
echo "La cantidad de elementos son: " . $cantidad . "\n";
echo "El promedio es " . $promedio;