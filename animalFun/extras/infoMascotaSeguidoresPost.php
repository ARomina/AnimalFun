<?php

	//Traer datos de la mascota seleccionada
	$sql = "SELECT m.id AS idMascota, u.id AS idUsuario, u.usuario AS nombreUsuario, u.foto AS fotoUsuario FROM seguimiento s
			JOIN usuario u ON s.usuario = u.id
			JOIN mascota m ON s.mascota = m.id
			WHERE s.mascota = '$idMascotaPost'
		    LIMIT 4";

	if($resultado = $con->query($sql)){
		while ($row = $resultado->fetch_assoc()){

		echo '
                          
                                      <li style="padding-bottom: 10px;">
                                          <img src="';
                                          if(isset($row['fotoUsuario'])){
	                                        echo str_replace('../recursos/', '../../recursos/', $row['fotoUsuario']);
	                                      }else{
	                                        echo '../../recursos/img/avatar-placeholder.jpg';
	                                      }
                                          echo '" class="media-photo" /><a href="#"> '.$row['nombreUsuario'].'</a>
                                      </li>';
        }

    }


?>