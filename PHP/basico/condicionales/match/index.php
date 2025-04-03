<?php

    // Estructura de control match

    $a = 7;

    $x = 10;
    $y = 20;
    $y = 7;

    $resultado = match($a) {
        $x => "Valor igual a x",
        $y => "Valor igual a y",
        $z => "Valor igual a z",
        default => "No coincide con ninguna variable"
    };

    echo $resultado . "<br>";

    $edad = 18;

    $resultado = match(true) {
        $edad < 18 => "Menor de edad",
        $edad >= 18 && $edad < 65 => "Adulto",
        default => "Adulto mayor"
    };

    echo $resultado . "<br>";