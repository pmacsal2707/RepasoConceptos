<?php

    // Array
    // Numérico
    $array1 = array(1, 2, 3, 4, 5);

    // String
    $array2 = array("Juan", "Pedro", "Maria", "Ana");

    // Associativo
    $array3 = array(
        "nombre" => "Lucas",
        "edad" => 20,
        "ciuda" => "Madrid",
    );

    // Mostramos una propiedad de array3
    echo $array3["nombre"] . "<br>";

    // Array asociativo con un array dentro
    $array4 = array(
        "nombre" => "Lucas",
        "edad" => 20,
        "ciudad" => "Madrid",
        "hobbies" => array("futbol", "tenis", "natacion")
    );
    // Mostramos un hobby
    echo $array4["hobbies"][0] . "<br>";

    // Multidimensional
    $array4 = array(
        array(1, 2, 3),
        array(4, 5, 6),
        array(7, 8, 9)
    );
