<?php

$productos = [
    [
        "nombre" => "Laptop",
        "precio" => 25000
    ],
    [
        "nombre" => "Mouse",
        "precio" => 800
    ],
    [
        "nombre" => "Teclado",
        "precio" => 1500
    ],
    [
        "nombre" => "Monitor",
        "precio" => 18000
    ]
];

$productoMasCaro = $productos[0];

foreach ($productos as $producto) {

    if ($producto["precio"] > $productoMasCaro["precio"]) {
        $productoMasCaro = $producto;
    }
}

echo "Producto más caro:\n";
echo "Nombre: " . $productoMasCaro["nombre"] . "\n";
echo "Precio: $" . $productoMasCaro["precio"];

?>