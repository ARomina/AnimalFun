<?php

	include_once "../conexion.php";

	//Inicialización de variable
	$idTipo = "";

	if(!empty($_POST['idTipo'])){

		$idTipo = $_POST['idTipo'];

			$sql = "SELECT id, descripcion FROM raza WHERE tipo = '$idTipo'";

			$resultado = mysqli_query($con, $sql);

			if($resultado->num_rows > 0){
				echo '<option value="" selected>Seleccione una raza</option>';
				while($row = $resultado->fetch_assoc()){
						echo '<option value="'.$row['id'].'">'.$row['descripcion'].'</option>';
					
				}
			}	
		
	}


?>