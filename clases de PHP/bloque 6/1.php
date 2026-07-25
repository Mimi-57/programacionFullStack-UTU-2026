<?php

$edad = 10;
$precio = 500;

if ($edad < 12) {
    $precio = $precio * 0.5;
}

echo "El precio final es: $" . $precio;

?>