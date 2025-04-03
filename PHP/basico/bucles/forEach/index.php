<?php

    // Bucle foreach

    $colores = ["rojo", "azul", "verde", "amarillo"];
    foreach ($colores as $color) {
        echo $color . "<br>";
    }

    $frutas = [
        "manzana" => "roja",
        "plátano" => "amarillo",
        "uva" => "morado",
        "naranja" => "naranja"
    ];
    foreach ($frutas as $fruta => $color) {
        echo "La $fruta es de color $color.<br>";
    }

    $perifericos = [
        ["codigo" => "A0001", "descripcion" => "raton"],
        ["codigo" => "A0002", "descripcion" => "teclado"],
        ["codigo" => "A0003", "descripcion" => "monitor"],
        ["codigo" => "A0004", "descripcion" => "impresora"]
    ];
    foreach ($perifericos as $periferico) {
        echo "Codigo: {$periferico['codigo']} Nombre: {$periferico['descripcion']}<br>";
    }