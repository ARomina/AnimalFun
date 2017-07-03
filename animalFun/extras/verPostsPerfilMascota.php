<?php

  $sql = "SELECT m.id, p.mascota, p.contenido, p.adjunto, p.fechaHora, m.nombre, m.foto, 
          (SELECT COUNT(*) FROM valoracion v JOIN post p ON v.post = p.id WHERE p.mascota = '$idMascota') AS cantidadValoraciones, 
          (SELECT COUNT(*) FROM comentario c JOIN post p ON c.post = p.id WHERE p.mascota = '$idMascota') AS cantidadComentarios 
          FROM post p
          JOIN mascota m ON p.mascota = '$idMascota'
          WHERE m.id = '$idMascota'
          ORDER BY p.fechaHora DESC
          LIMIT 2";

  if($resultado = $con->query($sql)){

    if (mysqli_num_rows($resultado) == 0){
    echo ' <div class="col-lg-12 col-md-12">
                <aside>
                  <div class="content-footer">
                    <p class="textoBoldBlanco text-center">Aún no has publicado ningún posteo, <br><a href="#div_post" class="textoBoldNaranjaClaro">¡Publica el primero! <i class="fa fa-pencil" aria-hidden="true"></i></a></p>
                  </div>
                 </aside>  
              </div>';

    }else{

      while ($row = $resultado->fetch_assoc()){
        echo '<div class="col-lg-12 col-md-12">
              <aside>';
              if(($row['adjunto'] != "") && (strpos($row['adjunto'], 'img'))){
                echo '<img src="'.str_replace('../recursos/', '../../recursos/', $row['adjunto']).'" class="img-responsive center-block">';
              }else if(($row['adjunto'] != "") && (strpos($row['adjunto'], 'youtube'))){
                echo '<iframe src="'.str_replace('watch?v=', 'embed/', $row['adjunto']).'" frameborder="0" allowfullscreen class="img-responsive center-block"></iframe>';
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
                    <a href="#" data-toggle="tooltip" data-placement="left" title="Comentarios"><i class="fa fa-commenting" ></i> '.$row['cantidadComentarios'].'</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="¡Me gusta!"><i class="fa fa-thumbs-o-up"></i> '.$row['cantidadValoraciones'].'</a>
                    <a href="#" data-toggle="tooltip" data-placement="right" title="¡No me gusta!"><i class="fa fa-thumbs-o-down"></i> 0</a>                  
                  </span>
                </div>
              </aside>
            </div><!-- col-12 -->';

      }

  }
}

/*
 $dislikes = rand(0, 6);
                    echo ' '.$dislikes;
                    echo '*/


?>