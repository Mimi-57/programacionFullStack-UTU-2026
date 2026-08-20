<?php

$productos = [
    [
        "nombre" => "Teclado",
        "precio" => 1200,
        "stock" => 5
    ],
    [
        "nombre" => "Mouse",
        "precio" => 800,
        "stock" => 7
    ],
    [
        "nombre" => "Ceibalita",
        "precio" => 1900,
        "stock" => 0
    ]
];

    foreach ($productos as $producto) {

        if ($producto["stock"] > 0) {
            echo "Producto: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n\n";
        }
    }
?>