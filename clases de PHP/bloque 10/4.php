<?php 

function calculartotal ($precio, $cantidad){
    return $precio * $cantidad;
}

$total1 = calculartotal(100, 3);
$total2 = calculartotal(270, 2);
$total3 = calculartotal(50, 5);

echo $total1 . "\n";
echo $total2 . "\n";
echo $total3 . "\n";

?>