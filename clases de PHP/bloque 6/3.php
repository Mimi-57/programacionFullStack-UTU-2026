<?php

$totaldecompra = 3500;
$descuento = 0;

if ($totaldecompra < 1000) {
    $descuento = 0;
} elseif ($totaldecompra >= 1000 && $totaldecompra < 5000) {
    $descuento = $totaldecompra * 0.10;
} else {
    $descuento = $totaldecompra * 0.20;
}

$totalfinal = $totaldecompra - $descuento;

echo "El total original es $" . $totaldecompra . "\n";
echo "El descuento es de $" . $descuento . "\n";
echo "El costo final es de $" . $totaldecompra;

?>
