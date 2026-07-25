<?php

$metododepago = "efectivo";

switch ($metododepago) {
    case "efectivo":
        echo "Metodo de pago: Efectivo <\n>";
        echo "El descuento es de: 10";
        break;

    case "Tarjeta":
        echo "Metodo de pago <\n>";
        echo "El descuento es de: 0% (precio normal)";
        break;
    case "Transferencia":
        echo "Metodo de pago: Transferencia <\n>";
        echo "Descuento: 5%";
        break;

default:
        echo "ERROR!!!: el metodo de pago no es valido ingrese algo que si se lea pobre de mierda";
        break;
}
?>