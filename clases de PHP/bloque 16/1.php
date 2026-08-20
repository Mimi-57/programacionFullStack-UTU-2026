$productos = [
    ["nombre" => "Teclado",
     "precio" => 1200],
    ["nombre" => "Mouse",
     "precio" => 800],
    ["nombre" => "ASUS TUF Gaming A16",
     "precio" => 2000]
];

foreach ($productos as $producto) {
    echo "Producto: " . $producto["nombre"] . "\n";
    echo "Precio: $" . $producto["precio"] . "\n\n";
}

?>