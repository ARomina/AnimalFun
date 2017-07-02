<?php

  if(isset($_SESSION['usuario'])){
      $usuario = $_SESSION['usuario'];
      $id = $_SESSION['id'];
  }

  //Inicializo variables
  $idMascota = "";
  $nombre = "";
  $foto = "";

  //Query
  $sql = "SELECT m.id, m.nombre, m.foto FROM mascota m 
          JOIN cita c ON m.id = c.mascotaCitada
          JOIN usuario u ON m.usuario = u.id  
          WHERE u.id = ?";

  //Preparo la query
  if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('i', $id);
            $stmt->bind_result($idMascota, $nombre, $foto);
            $stmt->execute();
            $stmt->store_result();
           
            if(($stmt->num_rows) > 0){

              while($stmt->fetch()){
                echo '<a href="../usuarios/verPerfilMascota.php?idMascota='.$idMascota.'" title="'.$nombre.'">
                        <img height="200" class="imagenes" src="'.str_replace('../recursos/', '../../recursos/', $foto).'" alt="Mascota - '.$nombre.'" title="'.$nombre.'"/>
                      </a>';
              }
            }else{
              echo '<p class="text-center">No han citado ninguna de tus mascotas</p>';
            }
  }
  
?>