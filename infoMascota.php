<?php 

	//Traer datos de la mascota seleccionada
	$sql = "SELECT m.id AS idMascota, m.nombre, t.descripcion AS tipo, ta.descripcion AS tamano, r.descripcion AS raza, s.descripcion AS sexo, e.descripcion AS 		estado, foto, caracteristicas FROM mascota
			JOIN tipo t ON m.tipo = t.id
			JOIN tamano ta ON m.tamano = ta.id
			JOIN raza r ON m.raza = r.id 
			JOIN sexo s ON m.sexo = s.id 
			JOIN estado e ON m.estado = e.id";


?>
