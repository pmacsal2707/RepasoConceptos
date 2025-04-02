<?php

    // Operadores de referencia

    $a = 10;
    $b = &$a; // Asignación por referencia

    echo "Valor de a: $a<br>";
    echo "Valor de b: $b<br>";

    $b = 20; // Cambiamos el valor de b

    echo "Después de cambiar b:<br>";
    echo "Valor de a: $a<br>";
    echo "Valor de b: $b<br>";