<?php

function esmayor($edad){
    if ($edad >= 18){
        return true;
    }
    else{
        return false;
    }
}
$resultado1 = esmayor(20);
$resultado2 = esmayor(15);

var_dump($resultado1);
var_dump($resultado2);
?>