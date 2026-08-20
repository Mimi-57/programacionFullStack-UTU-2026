<?php

$productos = [ [
    "nombre" => "laptop",
    "precio" => 25000,
    "stock"  => 5
    ],

    [
        "nombre" => "mouse",
        "precio" =>  800,
        "stock"  =>  2
    ],
    [
        "nombre" => "auriculares",
        "precio" => 1500,
        "stock"  => 7
    ]
     ];

     $productos = "mouse";
     $encontrado = false;

     foreach ($productos as $producto){
        
        if ($producto["nombre"] == $productobuscado){
            echo "EL producto fue encontrado \n";
            echo "Nombre: " . $producto ["nombre"] . "\n";
            echo "Precio: $" . $producto["precio"] . "\n";
            echo "Stock: " . $producto["stock"] . "\n";

            $encontrado = true;
        }
      
     }

     if ($encontrado == false) {
        echo "El producto no existe." ;
     }
     ?>

     