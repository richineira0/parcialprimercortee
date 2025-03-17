<?php

$frase = "A ella le gusta el coco";
$letra = "c";  


$cantidad = substr_count(strtolower($frase), strtolower($letra));


echo "La letra '$letra' aparece $cantidad veces en la frase: '$frase'.";
?>