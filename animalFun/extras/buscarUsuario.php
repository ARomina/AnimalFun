<?php

	include_once "../conexion.php";

	$usuarioBuscado = $_POST['usuarioBuscado'];
	
	$sql = "SELECT u.id, u.nombre, u.foto FROM usuario u WHERE u.nombre = '$usuarioBuscado'";

	if($resultado = $con->query($sql)){

	    while ($row = $resultado->fetch_assoc()){
	    	echo '<div class="col-lg-3 col-sm-4 col-xs-6">
	    			<a title="'.$row['nombre'].'" href="../secciones/perfilUsuarioPublico.php?idUsuario='.$row['id'].'">
	    				<img class="thumbnail img-responsive" src="';
	    				if(isset($row['foto'])){
                          echo str_replace('../recursos/', '../../recursos/', $row['foto']);
                        }else{
                          echo '../../recursos/img/avatar-placeholder.jpg';
                        }
                        echo '">
	    			</a>
	    			</div>';
	   	}

   }

?>