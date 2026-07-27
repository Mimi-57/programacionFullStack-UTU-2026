<?php

$producto = "Chanchito feliz";
$precio = 500;
$stock = 20;
$cantidad = 12;

if ($stock >= $cantidad) {

    $total = $precio * $cantidad;

    if ($cantidad >= 10) {
        $total = $total - ($total * 0.15);
    }

    echo "Producto: " . $producto;
    echo "Total a pagar: $" . $total;

} else {
    echo "Error: no hay stock suficiente.";
}

?>