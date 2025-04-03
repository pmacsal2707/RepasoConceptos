<?php
// Definir una constante
define("NOMBRE_SITIO", "Filamentopia");

// Definir variables
$titulo = "Fundamentos de PHP";
$descripcion = "Este archivo muestra ejemplos básicos de PHP aplicados a Filamentopia.";
$precioFilamento = 25.99;
$descuento = 5;

// Array de productos
$productos = ["Filamento PLA", "Filamento ABS", "Filamento PETG"];

// Operadores matemáticos
$precioConDescuento = $precioFilamento - $descuento;

// Condicional
$mensajeDescuento = "";
if ($precioConDescuento < 20) {
    $mensajeDescuento = "¡Gran oferta! El precio con descuento es menor a $20.";
} else {
    $mensajeDescuento = "El precio con descuento es de $$precioConDescuento.";
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <header>
        <h1><?php echo NOMBRE_SITIO; ?></h1>
        <p><?php echo $descripcion; ?></p>
    </header>
    
    <section>
        <h2>Productos disponibles</h2>
        <ul>
            <?php foreach ($productos as $producto): ?>
                <li><?php echo $producto; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
    
    <section>
        <h2>Precio del filamento</h2>
        <p>Precio original: $<?php echo $precioFilamento; ?></p>
        <p>Descuento aplicado: $<?php echo $descuento; ?></p>
        <p><?php echo $mensajeDescuento; ?></p>
    </section>
    <footer>
        <p>© 2025 <?php echo NOMBRE_SITIO; ?></p>
    </footer>
</body>
</html>