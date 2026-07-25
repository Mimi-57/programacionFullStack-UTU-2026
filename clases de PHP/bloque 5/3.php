<?php

$precio = 100;
$presupuesto = 500;
$stock = 10;
$cantidadsolicitada = 3;


$totaldecompra = $precio * $cantidadsolicitada;

if ($stock >= $cantidadsolicitada && $presupuesto >= $totaldecompra) {
    echo "La compra se ah realizado";
} else {
    echo "No se hace nada porque no hay plata";
}
?>