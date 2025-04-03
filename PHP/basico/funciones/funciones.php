<?php

    // Crear y usar funciones
    function saludo() {
        echo 'Hola, mi nombre es Juan<br>';
    }
    saludo();

    // Return
    function suma($a, $b) {
        return $a + $b;
    }
    $resultado = suma(5, 10);
    echo 'La suma es: ' . $resultado . '<br>';

    // Parámetros
    function sumaConParametros($a, $b) {
        return $a + $b;
    }
    $resultado = sumaConParametros(5, 2);
    echo 'La suma con parámetros es: ' . $resultado . '<br>';

    // Media notas
    function mediaNotas($a, $b, $c) {
        return ($a + $b + $c) / 3;
    }
    $media = mediaNotas(5, 8, 10);
    echo 'La media de las notas es: ' . $media . '<br>';