<?php

$edad = 16;
$tieneentrada = true;
$acompanadoporadulto = true;

if (($edad >= 18 && $tieneentrada) || ($edad < 18 && $acompanadoporadulto)) {
    echo "tiene arnès el escuincle, puede pasar";
} else {
    echo "no tiene arnès, pendejos pa' fuera";
}
?>
