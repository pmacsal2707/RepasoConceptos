<?php

    // Operador ternario

    $edad = 20;
    $mensaje = ($edad >= 18) ? "Eres mayor de edad" : "Eres menor de edad";
    echo $mensaje;
    echo "<br><br>";

    $numCamisetas = 5;
    $precioCamiseta = 10;
    $precioTotal = $numCamisetas * $precioCamiseta;

    $descuento = ($numCamisetas >= 3) ? $precioTotal-($precioTotal*0.20) : $precioTotal-($precioTotal*0.10);
    echo "El total a pagar es $descuento euros";
    echo "<br><br>";