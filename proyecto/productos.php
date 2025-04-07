<?php

include 'includes/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Filamentopia</title>
    <link rel="stylesheet" href="styles/styleProductos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1 class="text-center mt-5">Productos de Filamentopia</h1>
        <nav class="text-center mb-5">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html" class="barra_navegacion">Inicio</a></li>
                <li class="list-inline-item"><a href="about.html" class="barra_navegacion">Sobre nosotros</a></li>
                <li class="list-inline-item"><a href="contacto.php" class="barra_navegacion">Contacto</a></li>
                <li class="list-inline-item"><a href="productos.php" class="barra_navegacion">Productos</a></li>
            </ul>
        </nav>
    </header>

    <section class="container">
        <h2 class="mb-4 text-center">Todos nuestros productos</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            // Consulta para obtener todos los productos
            $sql = "SELECT * FROM productos";
            $resultado = $conexion->query($sql);

            // Verificar si hay productos
            if ($resultado->num_rows > 0) {
                // Mostrar cada producto como una tarjeta
                while ($producto = $resultado->fetch_assoc()) {
                    ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo $producto['imagen_url']; ?>" alt="<?php echo $producto['nombre']; ?>" class="card-img-top">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title"><?php echo $producto['nombre']; ?></h5>
                                <p class="card-text"><?php echo $producto['descripcion']; ?></p>
                                <p class="card-text"><strong>Precio:</strong> $<?php echo $producto['precio']; ?></p>
                                <p class="card-text"><strong>Color:</strong> <?php echo $producto['color']; ?></p>
                                <p class="card-text"><strong>Peso:</strong> <?php echo $producto['peso']; ?> kg</p>
                                <a href="#" class="btn btn-primary mt-auto">Agregar al carrito</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No hay productos disponibles.</p>";
            }

            $conexion->close();
            ?>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
