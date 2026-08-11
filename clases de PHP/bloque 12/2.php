<?php

$nombres = ["Juanco", "Juani", "Gabi", "Vero", "Toto"];

echo "Esto es echo con For: \n";

for ($i = 0; $i < 5; $i++){
    echo $nombres [$i] . "\n";
}

echo "Esto es con Foreach: \n";

foreach ($nombres as $nombre){
    echo $nombre . "\n";
}
?>