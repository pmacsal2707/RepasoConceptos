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
</head>

<body>

    <section class="container">
        <h2 class="mb-4 text-center">Todos nuestros productos</h2>
        <div class="columns is-multiline">
            <?php
            // Consulta para obtener todos los productos
            $sql = "SELECT * FROM productos";
            $resultado = $conexion->query($sql);

            // Verificar si hay productos
            if ($resultado->num_rows > 0) {
                // Mostrar cada producto como una tarjeta
                while ($producto = $resultado->fetch_assoc()) {
                    ?>
                    <div class="column is-4">
                        <div class="card">
                            <div class="card-image">
                                <figure class="image is-4by3">
                                    <img src="<?php echo $producto['imagen_url']; ?>"
                                        alt="<?php echo $producto['nombre']; ?>" />
                                </figure>
                            </div>
                            <div class="card-content">
                                <div class="media">
                                    <div class="media-content">
                                        <p class="title is-4"><?php echo $producto['nombre']; ?></p>
                                        <p class="subtitle is-6"><?php echo $producto['color']; ?></p>
                                    </div>
                                </div>

                                <div class="content">
                                    <p><?php echo $producto['descripcion']; ?></p>
                                    <p><strong>Precio:</strong> $<?php echo $producto['precio']; ?></p>
                                    <p><strong>Peso:</strong> <?php echo $producto['peso']; ?> kg</p>
                                    <a href="#" class="button is-danger">Agregar al carrito</a>
                                </div>
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
    <footer>
        <p>© 2025 Filamentopia</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>