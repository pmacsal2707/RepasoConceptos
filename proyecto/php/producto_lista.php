<?php
	$inicio = ($pagina>0) ? (($pagina * $registros)-$registros) : 0;
	$tabla="";

	$campos="id, nombre, descripcion, precio, color, peso, stock, imagen_url";

	$consulta_datos="SELECT $campos FROM productos WHERE productos.nombre LIKE '%$busqueda%' ORDER BY productos.id ASC LIMIT $inicio,$registros";

	$consulta_total = "SELECT COUNT(*) FROM productos WHERE productos.nombre LIKE '%$busqueda%'";

	$conexion=conexion();

	$datos = $conexion->query($consulta_datos);
	$datos = $datos->fetchAll();

	$total = $conexion->query($consulta_total);
	$total = (int) $total->fetchColumn();

	$Npaginas =ceil($total/$registros);

	if($total>=1 && $pagina<=$Npaginas){
		$contador=$inicio+1;
		$pag_inicio=$inicio+1;
		foreach($datos as $rows){
			$tabla.='
				<article class="media">
			        <figure class="media-left">
			            <p class="image is-64x64">';
			            if (!empty($rows['imagen_url']) && filter_var($rows['imagen_url'], FILTER_VALIDATE_URL)) {
							$tabla .= '<img src="' . $rows['imagen_url'] . '">';
						} else {
							$tabla .= '<img src="' . $rows['imagen_url'] . '">';
						}
			   $tabla.='</p>
			        </figure>
			        <div class="media-content">
			            <div class="content">
			              <p>
			                <strong>'.$contador.' - '.$rows['nombre'].'</strong><br>
							<strong>ID:</strong> '.$rows['id'].', <strong>PRECIO:</strong> $'.$rows['precio'].', <strong>STOCK:</strong> '.$rows['stock'].', <strong>COLOR:</strong> '.$rows['color'].', <strong>PESO:</strong> '.$rows['peso'].'
			              </p>
			            </div>
			            <div class="has-text-right">
			                <a href="index.php?vista=product_img&product_id_up='.$rows['id'].'" class="button is-link is-rounded is-small">Imagen</a>
			                <a href="index.php?vista=product_update&product_id_up='.$rows['id'].'" class="button is-success is-rounded is-small">Actualizar</a>
							<a href="'.$url.$pagina.'&product_id_del='.$rows['id'].'" class="button is-danger is-rounded is-small" onclick="return confirm(\'¿Estás seguro de que deseas eliminar este producto?\')">Eliminar</a>
			            </div>
			        </div>
			    </article>

			    <hr>
            ';
            $contador++;
		}
		$pag_final=$contador-1;
	}else{
		if($total>=1){
			$tabla.='
				<p class="has-text-centered" >
					<a href="'.$url.'1" class="button is-link is-rounded is-small mt-4 mb-4">
						Haga clic acá para recargar el listado
					</a>
				</p>
			';
		}else{
			$tabla.='
				<p class="has-text-centered" >No hay registros en el sistema</p>
			';
		}
	}

	if($total>0 && $pagina<=$Npaginas){
		$tabla.='<p class="has-text-right">Mostrando productos <strong>'.$pag_inicio.'</strong> al <strong>'.$pag_final.'</strong> de un <strong>total de '.$total.'</strong></p>';
	}

	$conexion=null;
	echo $tabla;

	if($total>=1 && $pagina<=$Npaginas){
		echo paginador_tablas($pagina,$Npaginas,$url,7);
	}