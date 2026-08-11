<?php

function par($numero){
    if ($numero % 2 == 0){
        return true;
    } else {
        return false;
    }

}
$numero = 10;
$resultado = par($numero);
var_dump($resultado);
?>