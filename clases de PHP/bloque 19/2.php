<?php

function mostrarproductos($productos)
{
    foreach ($productos as $producto) {
        echo "ID: " . $producto["id"] . "\n";
        echo "Nombre: " . $producto["nombre"] . "\n";
        echo "Precio: $" . $producto["precio"] . "\n";
        echo "Stock: " . $producto["stock"] . "\n";
        echo "Categoría: " . $producto["categoria"] . "\n";
        echo "____________________________\n";
    }
}

function mostrarproductosconstock($productos)
{
    foreach ($productos as $producto) {

        if ($producto["stock"] > 0) {
            echo "Nombre: " . $producto["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";
            echo "Categoría: " . $producto["categoria"] . "\n";
            echo "_________________________\n";
        }
    }
}

function buscarproductoporid($productos, $id)
{
    foreach ($productos as $producto) {

        if ($producto["id"] == $id) {
            return $producto;
        }
    }

    return null;
}

function calcularvalorinventario($productos)
{
    $total = 0;

    foreach ($productos as $producto) {
        $total = $total + ($producto["precio"] * $producto["stock"]);
    }

    return $total;
}

function productomascaro($productos)
{
    $masCaro = $productos[0];

    foreach ($productos as $producto) {

        if ($producto["precio"] > $masCaro["precio"]) {
            $masCaro = $producto;
        }
    }

    return $masCaro;
}


$productos = [
    [
        "id" => 1,
        "nombre" => "Laptop",
        "precio" => 25000,
        "stock" => 5,
        "categoria" => "Informática"
    ],
    [
        "id" => 2,
        "nombre" => "Mouse",
        "precio" => 800,
        "stock" => 10,
        "categoria" => "Accesorios"
    ],
    [
        "id" => 3,
        "nombre" => "Teclado",
        "precio" => 1500,
        "stock" => 0,
        "categoria" => "Accesorios"
    ],
    [
        "id" => 4,
        "nombre" => "Monitor",
        "precio" => 18000,
        "stock" => 3,
        "categoria" => "Informática"
    ]
];


echo "TODOS LOS PRODUCTOS\n";
echo "____________________\n";

mostrarProductos($productos);


echo "\nPRODUCTOS CON STOCK\n";
echo "_______________________\n";

mostrarproductosconstock($productos);


echo "\nBUSCAR PRODUCTO POR ID\n";
echo "__________________________\n";

$idBuscado = 2;

$producto = buscarproductoporid($productos, $idBuscado);

if ($producto != null) {
    echo "ID: " . $producto["id"] . "\n";
    echo "Nombre: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n";
    echo "Stock: " . $producto["stock"] . "\n";
    echo "Categoría: " . $producto["categoria"] . "\n";
} else {
    echo "Producto no encontrado\n";
}


echo "\nVALOR TOTAL DEL INVENTARIO\n";
echo "____________________________\n";

$total = calcularvalorinventario($productos);

echo "$" . $total . "\n";


echo "\nPRODUCTO MÁS CARO\n";
echo "_____________________\n";

$masCaro = productomascaro($productos);

echo "Nombre: " . $masCaro["nombre"] . "\n";
echo "Precio: $" . $masCaro["precio"] . "\n";

?>