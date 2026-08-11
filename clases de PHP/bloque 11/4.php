<?php

function promedio($nota1, $nota2, $nota3){
    $promedio = ($nota1 + $nota2 + $nota3) / 3;

    return $promedio;

}
function resultado($promedio){
    if($promedio >= 6){
        return "Aprobó el escuincle";
    } else{
        return "Jaja pendejo no dura nada";
    }
}

$promediofinal = promedio(9, 5, 10);

echo "El promedio es: " . $promediofinal . "\n";

$resultado = resultado($promediofinal);

echo "El resultado es: " . $resultado;

?>