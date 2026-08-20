<?php 

productos = [
    ["nombre" => "Teclado",
     "precio" => 1200],
    ["nombre" => "Mouse",
     "precio" => 800],
    ["nombre" => "ceibalita",
     "precio" => 2000]
];

foreach ($productos as $producto) {
    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n\n";
}

?>