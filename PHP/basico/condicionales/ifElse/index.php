<?php

    // Condicional if-else

    $a = 10;
    $b = 20;

    if ($a > $b) {
        echo "$a es mayor que $b";
    } elseif ($a < $b) {
        echo "$a es menor que $b";
    } else {
        echo "$a es igual a $b";
    }

    $edad = 16;

    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }

    $numero = -5;

    if ($numero > 0) {
        echo "El número es positivo.";
    } else {
        echo "El número es negativo o cero.";
    }

    $numero = 7;

    if ($numero % 2 == 0) {
        echo "El número es par.";
    } else {
        echo "El número es impar.";
    }
