<?php

    // Tipos de Datos en PHP

    // 1. Tipos Escalares
    // - Enteros (int)
    $entero = 10;
    // - Flotantes (float)
    $flotante = 10.5;
    // - Cadenas de texto (string)
    $cadena = "Hola Mundo";
    // - Booleanos (bool)
    $booleano = true; // o false
    // - Nulo (null)
    $nulo = null; // o NULL
    // - Arreglos (array)
    $arreglo = array(1, 2, 3, 4, 5); // o $arreglo = [1, 2, 3, 4, 5];
    // - Objetos (object)
    class Persona {
        public $nombre;
        public $edad;

        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
    }
    $persona = new Persona("Juan", 30);
    