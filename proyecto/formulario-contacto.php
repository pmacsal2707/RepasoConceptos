<?php
// Iniciar la sesión
session_start();

// Inicializar las variables de error
$nombreErr = "";
$emailErr = "";
$mensajeErr = "";
$archivoErr = "";

// Validación de datos del formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $email = $mensaje = "";
    $archivoSubido = false;

    // Sanitizar y validar nombre
    if (empty($_POST['name'])) {
        $nombreErr = "El nombre es obligatorio";
    } else {
        $nombre = htmlspecialchars(trim($_POST['name']));
    }

    // Validar email
    if (empty($_POST['mail'])) {
        $emailErr = "El email es obligatorio";
    } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "El email no es válido";
    } else {
        $email = htmlspecialchars(trim($_POST['mail']));
    }

    // Validar mensaje
    if (empty($_POST['mensaje'])) {
        $mensajeErr = "El mensaje es obligatorio";
    } else {
        $mensaje = htmlspecialchars(trim($_POST['mensaje']));
    }

    // Validar archivo PDF
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
        $archivoTipo = $_FILES['archivo']['type'];
        if ($archivoTipo != 'application/pdf') {
            $archivoErr = "Solo se permite subir archivos PDF.";
        } else {
            $directorio = 'uploads/';
            $nombreArchivo = basename($_FILES['archivo']['name']);
            $nombreArchivo = preg_replace('/[^a-zA-Z0-9.-]/', '_', $nombreArchivo); // Limpiar nombre del archivo
            $rutaDestino = $directorio . $nombreArchivo;
            if (move_uploaded_file($_FILES['archivo']['tmp_name'], $rutaDestino)) {
                $archivoSubido = true;
            } else {
                $archivoErr = "Hubo un error al subir el archivo.";
            }
        }
    }

    // Si el formulario es válido, mostrar un mensaje
    if (empty($nombreErr) && empty($emailErr) && empty($mensajeErr) && empty($archivoErr)) {
        $_SESSION['usuario'] = $nombre;
        setcookie('nombre_usuario', $nombre, time() + 3600, "/"); // Cookie para recordar nombre
    }
}
?>
