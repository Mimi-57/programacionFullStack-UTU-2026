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
        "stock" => 10
    ],
    [
        "nombre" => "Ceibalita",
        "precio" => 2000,
        "stock" => 3
    ],
    [
        "nombre" => "Auriculares",
        "precio" => 1500,
        "stock" => 7
    ]
];

    foreach ($productos as $producto) {

        if ($producto["precio"] > 1000) {
            echo "Producto: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n\n";
        }
    }
?>