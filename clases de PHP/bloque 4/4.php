<?php

$nota = 9;

if ($nota < 1 || $nota > 12) {
    echo "Error: la nota debe estar entre 1 y 12";
} elseif ($nota < 6) {
    echo "Insuficiente";
} elseif ($nota <= 8) {
    echo "Aprobado";
} elseif ($nota <= 10) {
    echo "Muy bueno";
} else {
    echo "Excelente";
}

?>