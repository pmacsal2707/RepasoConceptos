<?php

// Concatenación de cadenas en PHP
$nombre = "Juan";
$apellido = "Pérez";
$edad = 30;
$ciudad = "Madrid";

// Concatenación con el operador punto (.) y comillas dobles
$mensaje = "Hola, mi nombre es " . $nombre . " " . $apellido . ", tengo " . $edad . " años y vivo en " . $ciudad . ".";
echo $mensaje . "<br>";

// Interpolación de variables en comillas dobles
$mensaje2 = "Hola, mi nombre es $nombre $apellido, tengo $edad años y vivo en $ciudad.";
echo $mensaje2 . "<br>";