<?php

function obtenerproductosconstock($productos)
{
    $productosconstock = [];

    foreach ($productos as $producto) {

        if ($producto["stock"] > 0) {
            $productosconstock[] = $producto;
        }
    }

    return $productosconstock;
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
        "stock" => 0
    ],
    [
        "id" => 3,
        "nombre" => "Teclado",
        "precio" => 1500,
        "stock" => 7
    ]
];

$resultado = obtenerproductosconstock($productos);

foreach ($resultado as $producto) {

    echo "ID: " . $producto["id"] . "\n";
    echo "Nombre: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n";
    echo "Stock: " . $producto["stock"] . "\n \n";
}

?>

<?php


function calcularpromedio($notas)
{
    $suma = 0;

    foreach ($notas as $nota) {
        $suma = $suma + $nota;
    }

    return $suma / count($notas);
}


function notamasAlta($notas)
{
    $mayor = $notas[0];

    foreach ($notas as $nota) {

        if ($nota > $mayor) {
            $mayor = $nota;
        }
    }

    return $mayor;
}


function notamasbaja($notas)
{
    $menor = $notas[0];

    foreach ($notas as $nota) {

        if ($nota < $menor) {
            $menor = $nota;
        }
    }

    return $menor;
}
function contaraprobados($notas)
{
    $aprobados = 0;

    foreach ($notas as $nota) {

        if ($nota >= 6) {
            $aprobados++;
        }
    }

    return $aprobados;
}

function contardesaprobados($notas)
{
    $desaprobados = 0;

    foreach ($notas as $nota) {

        if ($nota < 6) {
            $desaprobados++;
        }
    }

    return $desaprobados;
}



$notas = [8, 5, 10, 4, 7, 6, 3];



echo "Notas:\n";

foreach ($notas as $nota) {
    echo $nota . "\n";
}

echo "\n";



echo "Promedio: " . calcularPromedio($notas) . "\n";
echo "Nota más alta: " . notaMasAlta($notas) . "\n";
echo "Nota más baja: " . notaMasBaja($notas) . "\n";
echo "Aprobados: " . contarAprobados($notas) . "\n";
echo "Desaprobados: " . contarDesaprobados($notas);

?>