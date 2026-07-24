<?php
$stock= 0;
$cantidad=0;
$precio=125;
$presupuesto= 25;

if($stock >= $cantidad) {
    echo "Hay stock suficiente";
} 
else {
    echo "no hay stock suficiente";
}

if ($presupuesto >= ($cantidad * $precio)){
    echo "El cliente tiene suficiente presupuesto"; 
} 
else {
    echo "el cliente no tiene suficiente presupuesto";
}
?>