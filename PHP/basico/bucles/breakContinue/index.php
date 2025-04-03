<?php

    // Break y continue

    // Break: Termina el bucle
    $pc = ["SO", "RAM", "SSD", "GPU", "CPU"];
    foreach ($pc as $component) {
        if ($component === "GPU") {
            break;
        }
        echo $component . "<br>";
    }

    // Continue: Salta a la siguiente iteración
    $pc = ["SO", "RAM", "SSD", "GPU", "CPU"];
    foreach ($pc as $component) {
        if ($component === "SSD") {
            continue;
        }
        echo $component . "<br>";
    }

    for ($i=1; $i<=10; $i++) {
        if ($i==5) {
            continue; // Salta el 5
        }
        echo $i . "<br>";
    }

    while ($i<=10) {
        if ($i==3) {
            continue; // Salta el 3
        }
        echo $i . "<br>";
        $i++;
    }