<?php

$numero1 = 20;
$numero2 = 5;
$opcion = 3;

switch ($opcion) {
    case 1:
        echo "Resultado: " . ($numero1 + $numero2);
        break;

    case 2:
        echo "Resultado: " . ($numero1 - $numero2);
        break;

    case 3:
        echo "Resultado: " . ($numero1 * $numero2);
        break;

    case 4:
        if ($numero2 != 0) {
            echo "Resultado: " . ($numero1 / $numero2);
        } else {
            echo "No se puede dividir entre cero";
        }
        break;

    default:
        echo "Opción incorrecta";
        break;
}

?>