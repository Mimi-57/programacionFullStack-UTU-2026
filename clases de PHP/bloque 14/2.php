<?php
$notas = [8, 5, 2, 6, 10, 3, 9];

foreach ($notas as $nota){
    if ($nota >= 5){
        echo "La nota del estudiante es: " . $nota . " Aprobado, el que sigue \n";
    } else {
        echo "La nota del estudiante es: " . $nota . " Chamaco pendejo no aprueba ni verga jajajaja \n";
    }
}

?>