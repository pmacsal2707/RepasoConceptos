<?php

    // Bucle do while

    // Contador de números desde 1 a 20
    $contador = 1;
    do {
        echo $contador . "<br>";
        $contador++;
    } while($contador <= 20);
    
    $contador = 20;
    do {
        echo $coDntador . "<br>";
        $contador--;
    } while($contador >= 1);

    // Tabla de multiplicar
    $num = 5;
    $i = 1;
    do {
        echo "$num x $i = " . ($num * $i) . "<br>";
        $i++;
    } while($i <= 10);

    $num = 7;
    $i = 12;
    do {
        echo "$num x $i = " . ($num * $i) . "<br>";
        $i--;
    } while($i >= 1);