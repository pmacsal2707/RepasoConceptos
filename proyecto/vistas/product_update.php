<div class="container is-fluid mb-6">
	<h1 class="title">Productos</h1>
	<h2 class="subtitle">Actualizar producto</h2>
</div>

<div class="container pb-6 pt-6">
	<?php
		include "./includes/btn_back.php";

		require_once "./php/main.php";

		$id = (isset($_GET['product_id_up'])) ? $_GET['product_id_up'] : 0;
		$id=limpiar_cadena($id);

		/*== Verificando producto ==*/
    	$check_producto=conexion();
    	$check_producto=$check_producto->query("SELECT * FROM productos WHERE id='$id'");

        if($check_producto->rowCount()>0){
        	$datos=$check_producto->fetch();
	?>

	<div class="form-rest mb-6 mt-6"></div>
	
	<h2 class="title has-text-centered"><?php echo $datos['nombre']; ?></h2>

	<form action="./php/producto_actualizar.php" method="POST" class="FormularioAjax" autocomplete="off" >

		<input type="hidden" name="producto_id" value="<?php echo $datos['id']; ?>" required >

		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>ID Producto</label>
				  	<input class="input" name="id" value="<?php echo $datos['id']; ?>" readonly>
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Nombre</label>
				  	<input class="input" type="text" name="nombre" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="70" required value="<?php echo $datos['nombre']; ?>" >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Precio</label>
				  	<input class="input" type="text" name="precio" pattern="[0-9.]{1,25}" maxlength="25" required value="<?php echo $datos['precio']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Stock</label>
				  	<input class="input" type="text" name="stock" pattern="[0-9]{1,25}" maxlength="25" required value="<?php echo $datos['stock']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Peso</label>
					<input class="input" type="text" name="peso" pattern="[0-9.]{1,25}" maxlength="25" required value="<?php echo $datos['peso']; ?>" >
				</div>
		  	</div>
		</div>
		<div class="columns">
		  	<div class="column">
		    	<div class="control">
					<label>Color</label>
				  	<input class="input" type="text" name="color" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,$#\-\/ ]{1,70}" maxlength="25" required value="<?php echo $datos['color']; ?>" >
				</div>
		  	</div>
		  	<div class="column">
		    	<div class="control">
					<label>Descripción</label>
				  	<input class="input" type="text" name="descripcion" pattern="[a-zA-Z0-9- ]{1,70}" maxlength="70" required value="<?php echo $datos['descripcion']; ?>" >
				</div>
		  	</div>
		</div>
		<p class="has-text-centered">
			<button type="submit" class="button is-success is-rounded">Actualizar</button>
		</p>
	</form>
	<?php 
		}else{
			include "./inc/error_alert.php";
		}
		$check_producto=null;
	?>
</div>