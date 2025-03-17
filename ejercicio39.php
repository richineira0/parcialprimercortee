<?php
// Archivo donde se guardará el valor del contador
$archivo = 'contador.txt';

// Leer el valor actual del contador, o establecer a 0 si no existe
$contador = (file_exists($archivo)) ? (int)file_get_contents($archivo) : 0;

// Incrementar el contador
$contador++;

// Guardar el nuevo valor en el archivo
file_put_contents($archivo, $contador);

// Mostrar el valor del contador
echo "Este es el contador de ejecuciones: $contador";
?>