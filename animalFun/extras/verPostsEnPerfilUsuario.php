<?php

	$sql = "SELECT m.id AS idMascotaPost, m.nombre, m.foto, p.id as postid, p.contenido, p.adjunto, p.fechaHora,
			(SELECT COUNT(*) FROM valoracion WHERE post = p.id) AS cantidadValoraciones
			FROM post p 
			JOIN mascota m ON p.mascota = m.id
			WHERE m.id IN (SELECT mascota FROM seguimiento WHERE usuario = '$id')
			ORDER BY p.fechaHora DESC
			LIMIT 4";

	if($resultado = $con->query($sql)){

	    while ($row = $resultado->fetch_assoc()){

			echo ' <div class="col-lg-12 col-md-12">
		                 <aside>';
		                    if(($row['adjunto'] != "") && (strpos($row['adjunto'], 'img'))){
			                	echo '<img src="'.str_replace('../recursos/', '../../recursos/', $row['adjunto']).'" class="img-responsive center-block">';
			                }else if(($row['adjunto'] != "") && (strpos($row['adjunto'], 'youtube'))){
			                	echo '<iframe src="'.str_replace('watch?v=', 'embed/', $row['adjunto']).'" frameborder="0" allowfullscreen class="img-responsive center-block"></iframe>';
			                } 
		                    echo '<div class="content-title">
		              				<div class="text-center">
		              				<h3><a href="postDeterminadoMascota.php?idPost='.$row['postid'].'&idMascotaPost='.$row['idMascotaPost'].'">'.$row['contenido'].'</a></h3>
		              				</div>
		              		</div>
		              				<div class="content-footer">
		              					<img class="user-small-img" src="'.str_replace('../recursos/', '../../recursos/', $row['foto']).'">
		              					<span style="font-size: 16px;color: #fff;">'.$row['nombre'].'</span>
		              					<span class="pull-right">
		              						<a href="#" data-toggle="tooltip" data-placement="right" title="¡Me gusta!"><i class="fa fa-thumbs-o-up"></i> '.$row['cantidadValoraciones'].'</a>
						                    <a href="#" data-toggle="tooltip" data-placement="right" title="¡No me gusta!"><i class="fa fa-thumbs-o-down"></i> 0</a>
						           </span>
		                            </div>
		                  </aside>
		              </div>';
		}

	}


?>