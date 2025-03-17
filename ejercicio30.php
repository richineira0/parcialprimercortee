<?php
$saldo = 10000;  
$pin = 2569;   
$pinIngresado = 2569; 

if ($pinIngresado == $pin) {
    $opcion = 2;  

    if ($opcion == 1) { $saldo += 500; echo "Deposito: $saldo\n"; }
    if ($opcion == 2) { $saldo -= 200; echo "Retiro: $saldo\n"; }
    if ($opcion == 3) { echo "Saldo: $saldo\n"; }
} else {
    echo "PIN incorrecto.\n";
}