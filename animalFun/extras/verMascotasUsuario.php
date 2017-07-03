<?php

  //Inicializo variables
  $idMascota = "";
  $nombre = "";
  $foto = "";

  //Query
  $sql = "SELECT m.id, m.nombre, m.foto FROM mascota m JOIN usuario u ON m.usuario = u.id WHERE u.id = ?";

  //Preparo la query
  if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('i', $idUsuario);
            $stmt->bind_result($idMascota, $nombre, $foto);
            $stmt->execute();
            $stmt->store_result();
           
            if(($stmt->num_rows) > 0){

              while($stmt->fetch()){
                echo '<a href="../usuarios/verPerfilMascotaPublico.php?idMascota='.$idMascota.'" title="'.$nombre.'">
                        <img height="200" class="imagenes" src="'.str_replace('../recursos/', '../../recursos/', $foto).'" alt="Mascota - '.$nombre.'" title="'.$nombre.'"/>
                      </a>';
              }
            }else{
               echo '<p>Este usuario aún no tiene mascotas</p>';
            }
  }
  
?>