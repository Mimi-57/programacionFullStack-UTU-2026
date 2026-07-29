<?php

$ahorro = 0;
$mes = 0;

while ($ahorro < 5000) {
    $mes++;
    $ahorro = $ahorro + 500;

    echo "En el mes " . $mes . " se ahorrò: " . $ahorro . "\n" ;
}