<?php

$productos = [
    [
        "id" => 1,
        "nombre" => "Laptop",
        "precio" => 25000,
        "stock" => 5
    ],
    [
        "id" => 2,
        "nombre" => "Mouse",
        "precio" => 800,
        "stock" => 10
    ],
    [
        "id" => 3,
        "nombre" => "Auriculares",
        "precio" => 1500,
        "stock" => 7
    ]
];

$idbuscado = 2;

$encontrado = false;

foreach ($productos as $producto) {

    if ($producto["id"] == $idbuscado) {

        echo "ID: " . $producto["id"] . "\n";
        echo "Nombre: " . $producto["nombre"] . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "Stock: " . $producto["stock"] . "\n";

        $encontrado = true;
    }
}

if ($encontrado == false) {
    echo "Producto no encontrado";
}

?>