<?php

$nombres = ["Toto", "Juani", "Juanco", "Gabi", "Vero"];

$buscar = "Juanco";

$encontrado = false;

foreach ($nombres as $nombre){
    if ($nombre == $buscar){
        $encontrado = true;
    }
}

if($encontrado){
    echo "El nombre fue encontrado en la base de datos \n";
} else {
    echo "El nombre que ingresaste no existe mamahuevo \n";
}

if(in_array($buscar, $nombres)){
    echo "El nombre fue encontrado en la base de datos";
} else {
    echo "El nombre que buscaste no existe chingadamadre";
}

?>