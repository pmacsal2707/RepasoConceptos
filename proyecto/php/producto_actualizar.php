<?php
	require_once "main.php";

	/*== Almacenando id ==*/
    $id=limpiar_cadena($_POST['id']);


    /*== Verificando producto ==*/
	$check_producto=conexion();
	$check_producto=$check_producto->query("SELECT * FROM productos WHERE id='$id'");

    if($check_producto->rowCount()<=0){
    	echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El producto no existe en el sistema
            </div>
        ';
        exit();
    }else{
    	$datos=$check_producto->fetch();
    }
    $check_producto=null;


    /*== Almacenando datos ==*/    
    $nombre=limpiar_cadena($_POST['nombre']);
	$descripcion=limpiar_cadena($_POST['descripcion']);

	$precio=limpiar_cadena($_POST['precio']);
	$color=limpiar_cadena($_POST['color']);
	$peso=limpiar_cadena($_POST['peso']);
	$stock=limpiar_cadena($_POST['stock']);


	/*== Verificando integridad de los datos ==*/
    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$descripcion)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                La DESCRIPCION no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9- ]{1,70}",$nombre)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El NOMBRE no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9.]{1,25}",$precio)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El PRECIO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9]{1,25}",$stock)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El STOCK no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}",$color)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El COLOR no coincide con el formato solicitado
            </div>
        ';
        exit();
    }

    if(verificar_datos("[0-9.]{1,25}",$peso)){
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                El PESO no coincide con el formato solicitado
            </div>
        ';
        exit();
    }


    /*== Verificando nombre ==*/
    if($id!=$datos['id']){
	    $check_codigo=conexion();
	    $check_codigo=$check_codigo->query("SELECT nombre FROM productos WHERE id='$id'");
	    if($check_codigo->rowCount()>0){
	        echo '
	            <div class="notification is-danger is-light">
	                <strong>¡Ocurrio un error inesperado!</strong><br>
                    El NOMBRE ingresado ya se encuentra registrado, por favor elija otro
	            </div>
	        ';
	        exit();
	    }
	    $check_codigo=null;
    }


    /*== Actualizando datos ==*/
    $actualizar_producto=conexion();
    $actualizar_producto=$actualizar_producto->prepare("UPDATE productos SET nombre=:nombre, descripcion=:descripcion, precio=:precio, color=:color, peso=:peso, stock=:stock WHERE id=:id");

    $marcadores=[
        ":nombre"=>$nombre,
        ":descripcion"=>$descripcion,
        ":precio"=>$precio,
        ":color"=>$color,
        ":peso"=>$peso,
        ":stock"=>$stock,
        ":id"=>$id
    ];


    if($actualizar_producto->execute($marcadores)){
        echo '
            <div class="notification is-info is-light">
                <strong>¡PRODUCTO ACTUALIZADO!</strong><br>
                El producto se actualizo con exito
            </div>
        ';
    }else{
        echo '
            <div class="notification is-danger is-light">
                <strong>¡Ocurrio un error inesperado!</strong><br>
                No se pudo actualizar el producto, por favor intente nuevamente
            </div>
        ';
    }
    $actualizar_producto=null;