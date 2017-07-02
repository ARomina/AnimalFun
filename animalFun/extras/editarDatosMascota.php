<?php 

  //Query
  $sql = "SELECT m.id, m.nombre, t.descripcion AS tipo, ta.descripcion AS tamano, r.descripcion AS raza, s.descripcion AS sexo, e.descripcion AS estado, m.caracteristicas FROM mascota m 
          JOIN tipo t ON t.id = m.tipo 
          JOIN tamano ta ON m.tamano = ta.id 
          JOIN raza r ON m.raza = r.id
          JOIN sexo s ON m.sexo = s.id
          JOIN estado e ON m.estado = e.id  
          WHERE m.id = '$idMascota'";

  if($resultado = $con->query($sql)){

    while ($row = $resultado->fetch_assoc()){
         echo '<div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Nombre </label>
                      <div class="col-sm-10">
                        <input type="text" placeholder="'.$row['nombre'].'" class="form-control" id="nombre" name="nombre" value="';
                          if($row['nombre']){
                            echo $row['nombre'];
                          }else{
                            echo "";
                          }
                         echo '">
                       <span class="alerta" id="alertaNombreMascota">En nombre no puede estar vacío, y solo puede contener letras y espacios</span>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tipo </label>
                      <div class="col-sm-10">
                         <select class="form-control" id="tipo" name="tipo">';
                                $cantTiposMascota = count($tiposMascota);
                                if($cantTiposMascota > 0){
                                  echo '<option value="" disabled="disabled" selected="selected">Seleccione un tipo</option>';
                                for($i=0; $i<$cantTiposMascota; $i++){
                                  echo '<option value="'.$tiposMascota[$i]['id'].'">'.$tiposMascota[$i]['descripcion'].'</option>';
                                  }
                                }else{
                                  echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
                                }
                        echo '</select>
                       <span class="alerta" id="alertaTipo">Debe seleccionar una opción</span>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Raza </label>
                      <div class="col-sm-10">
                        <select class="form-control" id="raza" name="raza">
                          <option selected="selected" disabled value="">Seleccione una raza</option>
                        </select>
                       <span class="alerta" id="alertaRaza">Debe seleccionar una opción</span>
                      </div>
                    </div>

                 <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tamaño </label>
                      <div class="col-sm-10">
                        <select class="form-control" id="tamano" name="tamano">';
                                $cantTamanosMascota = count($tamanosMascota);
                                if($cantTamanosMascota > 0){
                                  echo '<option value="" disabled="disabled" selected="selected">Seleccione un tamaño</option>';
                                  for($i=0; $i<$cantTamanosMascota; $i++){
                                    echo '<option value="'.$tamanosMascota[$i]['id'].'">'.$tamanosMascota[$i]['descripcion'].'</option>';
                                    }
                                }else{
                                    echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
                                }
                         echo '</select>
                      <span class="alerta" id="alertaTamano">Debe seleccionar una opción</span>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Sexo </label>
                      <div class="col-sm-10">
                        <select class="form-control" id="sexo" name="sexo" class="form-control">';
                                $cantSexosMascota = count($sexoMascota);
                                if($cantSexosMascota > 0){
                                  echo '<option value="" disabled="disabled" selected="selected">Seleccione un sexo</option>';
                                  for($i=0; $i<$cantSexosMascota; $i++){
                                    echo '<option value="'.$sexoMascota[$i]['id'].'">'.$sexoMascota[$i]['descripcion'].'</option>';
                                    }
                                }else{
                                    echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
                                }
                         echo '</select>
                       <span class="alerta" id="alertaSexo">Debe seleccionar una opción</span>
                      </div>
                    </div>

                 <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Estado </label>
                      <div class="col-sm-10">
                        <select class="form-control" id="estado" name="estado" class="form-control">';
                                $cantEstadosMascota = count($estadosMascota);
                                if($cantEstadosMascota > 0){
                                  echo '<option value="" disabled="disabled" selected="selected">Seleccione un estado</option>';
                                  for($i=0; $i<$cantEstadosMascota; $i++){
                                    echo '<option value="'.$estadosMascota[$i]['id'].'">'.$estadosMascota[$i]['descripcion'].'</option>';
                                    }
                                }else{
                                    echo '<option value="">No hay opciones disponibles</option>';   //si no hay nada cargado en el array
                                }
                        echo '</select>
                      <span class="alerta" id="alertaEstado">Debe seleccionar una opción</span>
                      </div>
                    </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Caracteristicas </label>
                      <div class="col-sm-10">
                        <input type="text" placeholder="'.$row['caracteristicas'].'" class="form-control" id="caracteristicas" name="caracteristicas" value="';
                          if($row['caracteristicas']){
                            echo $row['caracteristicas'];
                          }else{
                            echo "";
                          }
                         echo '">
                      </div>
                    </div>';

    }
    
    }else{
                echo '<tr><td>No se encontraron datos<td></tr>';
        }

  //Cierro conexión
  $con->close();

?>