<?php 

  $usuario = $_SESSION['usuario'];

  //Query para seleccionar todas las materias de la tabla de la bd
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
                    echo '<div class="col-md-6">
                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="nombre">Nombre </label>
                      <div class="col-sm-10">
                         <input type="text" placeholder="'.$nombre.'" class="form-control" id="nombre" name="nombre" value="';
                          if(isset($nombre)){
                            echo $nombre;
                          }else{
                            echo "";
                          }
                         echo '">
                         <span class="alerta" id="alertaNombre">Sólo puede contener letras</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="apellido">Apellido</label>
                      <div class="col-sm-10">
                         <input type="text" placeholder="'.$apellido.'" class="form-control" id="apellido" value="';
                          if(isset($apellido)){
                            echo $apellido;
                          }else{
                            echo "";
                          }
                         echo '">
                         <span class="alerta" id="alertaApellido">Sólo puede contener letras</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="correo">Email </label>
                      <div class="col-sm-10">
                         <input type="text" placeholder="'.$correo.'" class="form-control" id="correo" value="';
                          if(isset($correo)){
                            echo $correo;
                          }else{
                            echo "";
                          }
                         echo '">
                         <span class="alerta" id="alertaCorreo">Ingrese un formato correcto de email</span>
                      </div>
                    </div>

                    </div>

                    <div class="col-md-6">

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="telefono">Teléfono </label>
                      <div class="col-sm-10">';
                         if(isset($telefono) && !empty($telefono)){
                            echo '<input type="text" placeholder="'.$telefono.'" class="form-control" id="telefono" value="'.$telefono.'">';
                          }else{
                            echo '<input type="text" placeholder="Solo números" class="form-control" id="telefono" value="">';
                          }
                         echo '<span class="alerta" id="alertaTelefono">Sólo puede contener números</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="sexo">Sexo </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="sexo">
                            <option disabled selected>Seleccione una opción</option>
                            <option value="femenino">Femenino</option>
                            <option value="masculino">Masculino</option>
                         </select>
                         <span class="alerta" id="alertaSexo">Debe seleccionar una opción</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="fechaNac">Cumpleaños </label>
                      <div class="col-sm-10">';
                      if(isset($fechaNac) && !empty($fechaNac)){
                        //para la fecha del placeholder tenga el orden correcto para la validacion
                        $fechaAux = $fechaNac;
                        $fechaPartes = explode('-', $fechaAux);
                        $fechaArmada  = "$fechaPartes[2]/$fechaPartes[1]/$fechaPartes[0]";
                         echo '<input type="text" placeholder="'.$fechaArmada.'" class="form-control" id="fechaNac" value="';
                         if(isset($fechaArmada)){
                              echo $fechaArmada;
                            }else{
                              echo "";
                            }
                         echo '">';
                       }else{
                           echo '<input type="text" placeholder="dd/mm/aaaa" class="form-control" id="fechaNac" value="">';
                       }
                         echo '<span class="alerta" id="alertaFecha">Ingrese una fecha con el formato dd/mm/aaaa</span>
                      </div>
                    </div>

                    </div>';

            }
          
        }else{
                echo '<tr><td>No se encontraron datos<td></tr>';
        }

  }

  //Cierro conexión
  $con->close();

?>