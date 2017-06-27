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
  $sql = "SELECT id, nombre, foto FROM mascota WHERE usuario = ?";

  //Preparo la query
  if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('s', $id);
            $stmt->bind_result($idMascota, $nombre, $foto);
            $stmt->execute();
            $stmt->store_result();
           
            if(($stmt->num_rows) > 0){

              while($stmt->fetch()){
                echo '<div>
                        <input type="hidden" id="idMascota" value="'.$idMascota.'"/>
                        <a href="../usuarios/opcionesMascota.php?idMascota='.$idMascota.'" title="'.$nombre.'">
                          <img height="200" class="imagenes" src="'.str_replace('../recursos/', '../../recursos/', $foto).'" alt="Mascota - '.$nombre.'" title="'.$nombre.'"/>
                        </a>
                      </div>';
              }
            }
  }
  
?>