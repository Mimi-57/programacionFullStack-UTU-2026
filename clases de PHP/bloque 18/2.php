<?php

function contaraprobados($notas)
{
    $aprobados = 0;

    foreach ($notas as $nota) {

        if ($nota >= 6) {
            $aprobados++;
        }
    }

    return $aprobados;
}

$notas = [8, 5, 6, 9, 4, 7];

$resultado = contaraprobados($notas);

echo "Cantidad de aprobados: " . $resultado;

?>