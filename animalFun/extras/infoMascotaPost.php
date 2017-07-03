<?php 

	//Traer datos de la mascota seleccionada
	$sql = "SELECT m.id AS idMascotaPost, m.nombre, t.descripcion AS tipo, ta.descripcion AS tamano, r.descripcion AS raza, s.descripcion AS sexo, e.descripcion AS 		estado, foto AS fotoMascota, caracteristicas FROM mascota m
			JOIN tipo t ON m.tipo = t.id
			JOIN tamano ta ON m.tamano = ta.id
			JOIN raza r ON m.raza = r.id 
			JOIN sexo s ON m.sexo = s.id 
			JOIN estado e ON m.estado = e.id
			WHERE m.id = '$idMascotaPost'";

	if($resultado = $con->query($sql)){
		while ($row = $resultado->fetch_assoc()){
			echo '
                            <h2 class="title-widget-sidebar">'.$row['nombre'].'</h2>
                             <div class="content-widget-sidebar">
                                  <div class="center-block">
                                    <img src="'; 
                                      if(isset($row['fotoMascota'])){
                                        echo str_replace('../recursos/', '../../recursos/', $row['fotoMascota']);
                                      }else{
                                        echo '../../recursos/img/avatar-placeholder.jpg';
                                      }
                                      echo '" height="250" width="250" class="thumbnail img-responsive">
                                  </div>
                              </div>
                            <br>

                            <h2 class="title-widget-sidebar">Datos</h2>
                              <div class="content-widget-sidebar">
                                  <div class="center-block">
                                     <p><i class="fa fa-paw" aria-hidden="true" style="padding-right: 10px; color: #FF9D27;"></i>'.$row['raza'].'</p>';
                                     if($row['sexo'] == 'Macho'){
                                     	echo '<p><i class="fa fa-mars" aria-hidden="true" style="padding-right: 10px; color: #0099DD;"></i>'.$row['sexo'].'</p>';
                                     }else{
                                     	echo '<p><i class="fa fa-venus" aria-hidden="true" style="padding-right: 10px; color: #EE77BB; font-weight: bold;"></i>'.$row['sexo'].'</p>';
                                     }
                                  echo '</div>
                              </div> 
                            <br>'; 
		}
	}

?>
