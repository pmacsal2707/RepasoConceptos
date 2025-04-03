<?php

    // Condicional multiple

    $dia = 3;

    if ($dia == 1) {
        echo "Lunes";
    } elseif ($dia == 2) {
        echo "Martes";
    } elseif ($dia == 3) {
        echo "Miércoles";
    } elseif ($dia == 4) {
        echo "Jueves";
    } elseif ($dia == 5) {
        echo "Viernes";
    } elseif ($dia == 6) {
        echo "Sábado";
    } elseif ($dia == 7) {
        echo "Domingo";
    } else {
        echo "No es un día de la semana válido";
    }
    echo "<br><br>";

    // Ejemplo ordenadores

    $numOrdenadores = 3;
    $precioOrdenador = 700;

    if ($numOrdenadores < 5) {
        $precioTotal = ($numOrdenadores * $precioOrdenador) - ($numOrdenadores * $precioOrdenador * 0.10);
    } elseif ($numOrdenadores >= 5 && $numOrdenadores < 10) {
        $precioTotal = $numOrdenadores * $precioOrdenador - ($numOrdenadores * $precioOrdenador * 0.20);
    } elseif ($numOrdenadores > 10) {
        $precioTotal = $numOrdenadores * $precioOrdenador - ($numOrdenadores * $precioOrdenador * 0.40);
    } else {
        echo "No se ha podido calcular el precio total";
    }

    echo "El precio total es $precioTotal euros";