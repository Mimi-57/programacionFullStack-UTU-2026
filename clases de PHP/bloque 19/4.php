<?php


function calcularsubtotal($producto)
{
    return $producto["precio"] * $producto["cantidad"];
}

function calculartotal($productos)
{
    $total = 0;

    foreach ($productos as $producto) {
        $total = $total + calcularsubtotal($producto);
    }

    return $total;
}

function aplicardescuento($total)
{
    if ($total > 5000) {
        return $total * 0.90;
    }

    return $total;
}


$productos = [
    [
        "nombre" => "Teclado",
        "precio" => 1500,
        "cantidad" => 2
    ],
    [
        "nombre" => "Mouse",
        "precio" => 800,
        "cantidad" => 1
    ],
    [
        "nombre" => "Auriculares",
        "precio" => 3000,
        "cantidad" => 1
    ]
];



echo "CARRITO DE COMPRAS\n";
echo "___________________\n";

foreach ($productos as $producto) {

    $subtotal = calcularsubtotal($producto);

    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n";
    echo "Cantidad: " . $producto["cantidad"] . "\n";
    echo "Subtotal: $" . $subtotal . "\n";
    echo "------------------\n";
}



$total = calculartotal($productos);

echo "\nTotal de la compra: $" . $total . "\n";



$totalfinal = aplicardescuento($total);

if ($total > 5000) {
    echo "Descuento aplicado: 10%\n";
} else {
    echo "No se aplica descuento.\n";
}



echo "Total final: $" . $totalfinal . "\n";

?>