<?php
// filepath: c:\xampp\htdocs\CursoRepaso\proyecto\vistas\procesar_carrito.php
include 'includes/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $producto_id = $_POST['producto_id'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $cliente_id = $_POST['cliente_id'];

    // Calcular el total
    $total = $cantidad * $precio;

    // Insertar en la base de datos (ajusta la tabla y columnas según tu esquema)
    $sql = "INSERT INTO carrito (cliente_id, producto_id, cantidad, total) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param('iiid', $cliente_id, $producto_id, $cantidad, $total);

    if ($stmt->execute()) {
        echo "Producto añadido al carrito correctamente.";
    } else {
        echo "Error al añadir el producto al carrito: " . $conexion->error;
    }

    $stmt->close();
    $conexion->close();
}
?>