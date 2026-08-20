<?php

function sumarNumeros($numeros)
{
    $suma = 0;

    foreach ($numeros as $numero) {
        $suma = $suma + $numero;
    }

    return $suma;
}

$numeros = [10, 20, 30, 40, 50];

$resultado = sumarNumeros($numeros);

echo "La suma es: " . $resultado;

?>