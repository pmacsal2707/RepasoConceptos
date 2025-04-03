<?php

    // Estructura switch

    $fruta = "manzana";

    switch ($fruta) {
        case "manzana":
            echo "La fruta es una manzana";
            break;
        case "naranja":
            echo "La fruta es una naranja";
            break;
        case "plátano":
            echo "La fruta es un plátano";
            break;
        case "pera":
            echo "La fruta es una pera";
            break;
        default:
            echo "No se ha encontrado la fruta";
    }
    echo "<br><br>";

    $dia = 3;

    switch ($dia) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "No es un día de la semana válido";
    }
    