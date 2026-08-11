<?php

$precios = [100, 230, 580, 730, 1000];

foreach ($precios as $precio){
    echo "$" . $precio . "\n";
}

echo "\n La cantidad de precios es de: " . count($precios);

?>