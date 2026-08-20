<?php

function buscarproductoporid($productos, $id)
{
    foreach ($productos as $producto) {

        if ($producto["id"] == $id) {
            return $producto;
        }
    }

    return null;
}

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
        "nombre" => "Teclado",
        "precio" => 1500,
        "stock" => 7
    ]
];

$idBuscado = 2;

$producto = buscarproductoporid($productos, $idBuscado);

if ($producto != null) {
    echo "ID: " . $producto["id"] . "\n";
    echo "Nombre: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n";
    echo "Stock: " . $producto["stock"];
} else {
    echo "Producto no encontrado";
}

?>