<?php 

  $usuario = $_SESSION['usuario'];

  //Query
  $sql = "SELECT nombre, apellido, correo, sexo, telefono, fechaNac FROM usuario u WHERE u.usuario = ?"; 
 
  //Preparo la query
  if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('s', $usuario);
            $stmt->bind_result($nombre, $apellido, $correo, $sexo, $telefono, $fechaNac);
            $stmt->execute();
            $stmt->store_result();
           
            if(($stmt->num_rows) > 0){

              while($stmt->fetch()){
                    echo '<div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Nombre </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$nombre.'</p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Apellido</label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$apellido.'</p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Email </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$correo.'</p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Teléfono </label>
                      <div class="col-sm-10">';
                      if(isset($telefono) && !empty($telefono)){
                        echo '<p class="form-control">'.$telefono.'</p>';
                      }else{
                        echo '<p class="form-control">No hay datos ingresados aún</p>';
                      }
                      echo '</div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Sexo </label>
                      <div class="col-sm-10">';
                      if(isset($sexo) && !empty($sexo)){
                        echo '<p class="form-control">'.$sexo.'</p>';
                      }else{
                        echo '<p class="form-control">No hay datos ingresados aún</p>';
                      }
                      echo '</div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Cumpleaños </label>
                      <div class="col-sm-10">';
                      if(isset($fechaNac) && !empty($fechaNac)){
                        //para que la fecha del placeholder tenga el orden correcto para la validacion
                        $fechaPartes = explode('-', $fechaNac);
                        $fechaArmada  = "$fechaPartes[2]/$fechaPartes[1]/$fechaPartes[0]";
                        echo '<p class="form-control">'.$fechaArmada.'</p>';
                      }else{
                        echo '<p class="form-control">No hay datos ingresados aún</p>';
                      }
                    echo '</div>';
                      }
          
        }else{
                echo '<tr><td>No se encontraron datos<td></tr>';
        }

  }

  //Cierro conexión
  $con->close();

?>