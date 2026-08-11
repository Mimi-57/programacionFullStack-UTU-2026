<?php

function aplicardescuento($precio, $descuento){
    $montodescuento = $precio * $descuento / 100;
    $preciofinal = $precio - $montodescuento;

    return $preciofinal;
}

$preciofinal = aplicardescuento(1557, 10);

echo $preciofinal;
?>