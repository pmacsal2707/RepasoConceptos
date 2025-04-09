<?php
// Incluir el archivo de validación
include 'formulario-contacto.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="icon" href="images/person-circle.svg" type="image/svg">
    <link rel="stylesheet" href="styles/styleContacto.css">
</head>
<body>

    <form class="formulario" method="POST" enctype="multipart/form-data">
        <h2>Contacto</h2>
        <img src="multimedia/images/contacto.png" alt="Imagen de un Teléfono" class="imagen_contacto">
        <p>¿Tienes dudas? Contáctanos y descubre cómo podemos ayudarte en tu próxima impresión sostenible.</p>

        <?php if (isset($_SESSION['usuario'])): ?>
            <p>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</p>
        <?php endif; ?>

        <fieldset>
            <legend>Formulario de contacto</legend>
            
            <div>
                <label class="datos" for="name">Nombre completo</label>
                <input class="formulario_input" id="name" name="name" type="text" placeholder="ej: Juan Pérez" value="<?php echo isset($nombre) ? $nombre : ''; ?>" required>
                <span class="error"><?php echo $nombreErr; ?></span>
            </div>

            <div>
                <label class="datos" for="mail">Email</label>
                <input class="formulario_input" id="mail" name="mail" type="text" placeholder="ej: correo@gmail.com" value="<?php echo isset($email) ? $email : ''; ?>" required>
                <span class="error"><?php echo $emailErr; ?></span>
            </div>

            <div>
                <label class="datos" for="mensaje">Mensaje</label>
                <textarea rows="5" class="formulario_textarea" id="mensaje" name="mensaje" placeholder="Deja tu mensaje..." required><?php echo isset($mensaje) ? $mensaje : ''; ?></textarea>
                <span class="error"><?php echo $mensajeErr; ?></span>
            </div>

            <div>
                <label class="datos" for="archivo">Subir archivo PDF</label>
                <input class="formulario_input" type="file" name="archivo" id="archivo" accept="application/pdf">
                <span class="error"><?php echo $archivoErr; ?></span>
            </div>

            <label for="terminos">
                <input class="formulario_checkbox" type="checkbox" name="terminos" id="terminos" required>
                Acepto los términos y condiciones
            </label>

            <input class="formulario_input formulario_submit" type="submit" value="Enviar">
        </fieldset>
    </form>

    <footer>
        <p>© 2025 Filamentopia</p>
    </footer>
</body>
</html>
