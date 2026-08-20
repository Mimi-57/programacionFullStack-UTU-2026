<?php

$productos = [
    [
        "id" => 1,
        "nombre" => "Laptop",
        "precio" => 25000
    ],
    [
        "id" => 2,
        "nombre" => "Mouse",
        "precio" => 800
    ],
    [
        "id" => 3,
        "nombre" => "Teclado",
        "precio" => 1500
    ]
];

$idbuscado = 2;

$productoencontrado = null;


foreach ($productos as $producto) {

    if ($producto["id"] == $idbuscado) {
        $productoencontrado = $producto;
    }
}



if ($productoencontrado != null) {

    $respuesta = [
        "exito" => true,
        "producto" => $productoencontrado
    ];

} else {

    $respuesta = [
        "exito" => false,
        "mensaje" => "Producto no encontrado"
    ];
}


$json = json_encode($respuesta);

echo $json;

?>