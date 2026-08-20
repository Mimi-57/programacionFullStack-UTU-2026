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
    ]
];

$json = json_encode($productos);

echo $json;

?>