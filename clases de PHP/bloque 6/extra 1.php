<?php
$tipodecliente = 2;

switch ($tipodecliente) {
    case 1:
        echo "Este cliente es comun: sin descuento";
        break;
    case 2:
        echo "Este cliente es frecuente: 10% de descuento";
        break;
    case 3:
        echo "Este es un cliente premium: 20% de descuento";
        break;
    default:
    echo "ERROR!!: Este cliente no es valido";
    break;
}
?>