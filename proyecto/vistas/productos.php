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
                                    <a href="#" class="button is-danger agregar-carrito"
                                        data-id="<?php echo $producto['id']; ?>"
                                        data-precio="<?php echo $producto['precio']; ?>">Agregar al carrito</a>
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

    <!-- Modal -->
    <div id="modal-carrito" class="modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <form id="form-carrito" action="procesar_carrito.php" method="POST">
                    <input type="hidden" name="producto_id" id="producto-id">
                    <input type="hidden" name="precio" id="producto-precio">
                    <input type="hidden" name="cliente_id" value="1"> <!-- Cambia esto según el cliente logueado -->
                    <div class="field">
                        <label class="label">Cantidad</label>
                        <div class="control">
                            <input class="input" type="number" name="cantidad" id="cantidad" min="1" value="1" required>
                        </div>
                    </div>
                    <button type="submit" class="button is-success">Añadir a la cesta</button>
                </form>
            </div>
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal-carrito');
    const agregarCarritoButtons = document.querySelectorAll('.agregar-carrito');
    const modalCloseButton = modal.querySelector('.modal-close');
    const modalBackground = modal.querySelector('.modal-background');
    const productoIdInput = document.getElementById('producto-id');
    const productoPrecioInput = document.getElementById('producto-precio');

    // Abrir modal al hacer clic en "Agregar al carrito"
    agregarCarritoButtons.forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault(); // Evitar comportamiento por defecto
        const productoId = button.getAttribute('data-id');
        const productoPrecio = button.getAttribute('data-precio');

        // Pasar datos al formulario del modal
        productoIdInput.value = productoId;
        productoPrecioInput.value = productoPrecio;

        modal.classList.add('is-active');
      });
    });

    // Cerrar modal al hacer clic en el botón de cierre o el fondo
    modalCloseButton.addEventListener('click', () => {
      modal.classList.remove('is-active');
    });

    modalBackground.addEventListener('click', () => {
      modal.classList.remove('is-active');
    });
  });
</script>

</html>