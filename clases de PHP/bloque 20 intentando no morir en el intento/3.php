<?php

$producto = [
    "id" => 1,
    "nombre" => "Laptop",
    "precio" => 25000
];

$respuesta = [
    "exito" => true,
    "mensaje" => "Producto encontrado",
    "producto" => $producto
];

$json = json_encode($respuesta);

echo $json;

?>