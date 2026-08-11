<?php

$notas = [5, 8, 6, 4, 10, 7, 3];

$aprobados = 0;

foreach ($notas as $nota){
    if ($nota >= 6){
        $aprobados++;
    }
}
echo "La cantidad de aprobados: " . $aprobados;

?>