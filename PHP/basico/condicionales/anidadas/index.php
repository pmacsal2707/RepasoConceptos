<?php

    // Estructura condicional anidada

    // Ejemplo para comprobar si una persona se puede jubilar o no
    $edad = 65;
    $sexo = "hombre";
    
    if ($sexo == "hombre") {
        if ($edad >= 65) {
            echo "Puede jubilarse";
        } else {
            echo "No puede jubilarse";
        }
    } elseif ($sexo == "mujer") {
        if ($edad >= 60) {
            echo "Puede jubilarse";
        } else {
            echo "No puede jubilarse";
        }
    } else {
        echo "Sexo no válido";
    }