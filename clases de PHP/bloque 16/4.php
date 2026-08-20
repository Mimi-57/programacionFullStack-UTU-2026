<?php

$productos = [
    [
        "nombre" => "Teclado",
        "precio" => 1200,
        "stock" => 5
    ],
    [
        "nombre" => "Mouse",
        "precio" => 850,
        "stock" => 10
    ],
    [
        "nombre" => "Ceibalita",
        "precio" => 2100,
        "stock" => 8
    ]
];

$total_Inventario = 0;

    foreach ($productos as $producto) {

        $valor_Producto = $producto["precio"] * $producto["stock"];

        echo "Producto: " . $producto["nombre"] . "\n";
        echo "Valor del inventario: $" . $valor_Producto . "\n\n";

        $total_Inventario = $total_Inventario + $valor_Producto;
    }

echo "Valor total del inventario: $" . $total_Inventario;

?>