<?php

    $texto = "hola mundo";
    echo strtoupper($texto);
    echo "<br><br>";
    // Salida: "HOLA MUNDO"

    $texto = "HOLA MUNDO";
    echo strtolower($texto);
    echo "<br><br>";
    // Salida: "hola mundo"

    $texto = "Hola Mundo";
    $longitud = strlen($texto);
    echo "La cantidad de caracteres es: " . $longitud;
    echo "<br><br>";
    // Salida: 10

    $texto = "Hola Mundo, ¿cómo estás?";
    $numero_palabras = str_word_count($texto);
    echo "La cantidad de palabras es: " . $numero_palabras;
    echo "<br><br>";
    // Salida: 5

    $texto = "Hola Mundo, ¿cómo estás?";
    $arreglo = explode(" ", $texto, -1);
    print_r($arreglo); 
    echo "<br><br>";

    //
    $numero = 12345.6789;
    echo number_format($numero, 2);
    echo "<br><br>";

    // Fecha y hora
    $fecha = date("Y-m-d H:i:s");
    echo "La fecha y hora actual es: " . $fecha;
    echo "<br><br>";

    // Mostrar la fecha actual en español
    