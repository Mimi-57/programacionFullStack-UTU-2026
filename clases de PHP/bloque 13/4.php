<?php

$numeros = [15, 8, 32, 4, 25];

$mayor = $numeros[0];

foreach ($numeros as $numero){
    if ($numero > $mayor){
        $mayor = $numero;
    }
}

echo "El numero mayor es: " . $mayor . "\n";

$mayor2 = max($numeros);

echo "El numero mayor con esta cosa el max: " . $mayor2;

?>