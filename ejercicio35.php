<?php
// Lista de nombres predefinida
$nombres = ["Juan", "Mariana", "Carlos", "Juliana", "Pablo"];

// Nombre que vamos a buscar predefinido
$nombre_buscado = "Pablo";  // Puedes cambiar este valor a cualquier otro nombre

// Verificar si el nombre está en la lista
if (in_array($nombre_buscado, $nombres)) {
    echo "El nombre '$nombre_buscado' está en la lista.";
} else {
    echo "El nombre '$nombre_buscado' no está en la lista.";
}
?>