<?php
$preciounitario = 100;
$cantidadcomprada = 6;

$subtotal = $preciounitario * $cantidadcomprada;
$descuento = 0;

if ($preciounitario >= 5){
    $descuento = $subtotal * 0.10;
}

$totalfinal = $subtotal - $descuento;

echo "El subtotal es $" . $subtotal . "\n";
echo "Su descuento es de: $" . $descuento . "\n";
echo "El total es de: $" . $totalfinal;

?>