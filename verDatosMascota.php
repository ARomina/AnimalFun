<?php 

  //Query
  $sql = "SELECT m.id, m.nombre, t.descripcion AS tipo, ta.descripcion AS tamano, r.descripcion AS raza, s.descripcion AS sexo, e.descripcion AS estado FROM mascota m 
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
                      <p class="form-control">'.$row['nombre'].'</p>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tipo </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$row['tipo'].'</p>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tamaño </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$row['tamano'].'</p>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Raza </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$row['raza'].'</p>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Sexo </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$row['sexo'].'</p>
                      </div>
                    </div>

                <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Estado </label>
                      <div class="col-sm-10">
                        <p class="form-control">'.$row['estado'].'</p>
                      </div>
                    </div>';

    }
    
    }else{
                echo '<tr><td>No se encontraron datos<td></tr>';
        }

 
  /*//Preparo la query
  if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('i', $idMascota);
            $stmt->bind_result($nombre, $tipo, $tamano, $raza, $sexo, $estado, $caracteristicas);
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
                      <label class="col-sm-2 control-label" for="textinput">Tipo</label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$tipo.'</p>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tamaño </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$tamano.'</p>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tamaño </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$raza.'</p>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tamaño </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$sexo.'</p>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tamaño </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$estado.'</p>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-2 control-label" for="textinput">Tamaño </label>
                      <div class="col-sm-10">
                      <p class="form-control">'.$caracteristicas.'</p>
                      </div>
                    </div>';
          
        }

      }else{
                echo '<tr><td>No se encontraron datos<td></tr>';
        }

  }*/

  //Cierro conexión
  $con->close();

?>