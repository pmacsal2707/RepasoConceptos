<?php require "includes/session_start.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filamentopia</title>
    <link rel="stylesheet" href="styles/bulma.min.css">
    <link rel="stylesheet" href="styles/estilos.css">
</head>
<body>
    <?php

        if(!isset($_GET['vista']) || $_GET['vista']==""){
            $_GET['vista']="login";
        }

        if(is_file("./vistas/".$_GET['vista'].".php") && $_GET['vista']!="login" && $_GET['vista']!="404"){
        
            /*== Cerrar sesion ==*/
            if((!isset($_SESSION['id']) || $_SESSION['id']=="") || (!isset($_SESSION['usuario']) || $_SESSION['usuario']=="")){
                include "./vistas/logout.php";
                exit();
            }

            include "./includes/navbar.php";
                
            include "./vistas/".$_GET['vista'].".php";

            include "./includes/script.php";
                
        }else{
            if($_GET['vista']=="login"){
                include "./vistas/login.php";
            }else{
                include "./vistas/404.php";
            }
        }
    ?>
</body>
</html>