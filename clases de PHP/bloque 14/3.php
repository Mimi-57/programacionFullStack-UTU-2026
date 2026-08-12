<?php

$notas = [8, 5, 2, 6, 10, 3, 9];

$suma = 0;
$aprobados = 0;
$desaprobado = 0;

foreach($notas as $nota){
    echo "la nota es de:" . $nota . "\n";

    $suma = $suma + $nota;

    if($nota >= 5){
        $aprobados = $aprobados + 1;
    } else {
        $desaprobado = $desaprobado + 1;
    }
}

$cantidad = count($notas);
$promedio = $suma / $cantidad;

echo "\n";
echo "Los promedio son de: " . $promedio . "\n";
echo "Los aprobados son: " . $aprobados . "\n";
echo "Los desaprobados son: " . $desaprobado;

?>