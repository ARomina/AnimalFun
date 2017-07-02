<?php

  $sql = "SELECT m.id, p.mascota, p.contenido, p.adjunto, p.fechaHora, m.nombre, m.foto FROM post p
          JOIN mascota m ON p.mascota = '$idMascota'
          WHERE m.id = '$idMascota'
          ORDER BY p.fechaHora DESC
          LIMIT 2";

  if($resultado = $con->query($sql)){

    if (mysqli_num_rows($resultado) == 0){
    echo ' <div class="col-lg-12 col-md-12">
                <aside>
                  <div class="content-footer">
                    <p class="textoBoldBlanco text-center">Aún no has publicado ningún posteo</p>
                  </div>
                 </aside>  
              </div>';

    }else{

      while ($row = $resultado->fetch_assoc()){
        echo '<div class="col-lg-12 col-md-12">
              <aside>';
              if($row['adjunto'] != ""){
                echo '<img src="'.str_replace('../recursos/', '../../recursos/', $row['adjunto']).'" class="img-responsive center-block">';
              } 
                echo '<div class="content-title">
                  <div class="text-center">
                    <h3><a href="#">'.$row['contenido'].'</a></h3>
                  </div>
                </div>
                <div class="content-footer">
                  <img class="user-small-img" src="'.str_replace('../recursos/', '../../recursos/', $row['foto']).'">
                  <a href="#" style="font-size: 16px;color: #fff;">'.$row['nombre'].'</a>
                  <span class="pull-right">
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comentarios"><i class="fa fa-commenting" ></i> 30</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="¡Me gusta!"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
                  </span>
                </div>
              </aside>
            </div><!-- col-12 -->';

      }

      if(mysqli_num_rows($resultado) > 2){
        echo '<br><br>
                      <div class="col-lg-12 col-md-12">
                        <aside>
                          <div class="content-footer">
                            <button class="center-block">Ver más posteos</button>
                          </div>
                         </aside>  
                      </div>';
      }

  }
}
 



?>