<?php

	/*$sql = "SELECT m.id, m.nombre, m.foto, p.contenido, p.fechaHora FROM post p
			JOIN mascota m ON m.id = p.mascota
			ORDER BY p.fechaHora DESC 
			LIMIT 4";*/
	/*$sql = "(SELECT a.id, a.usuarioEntrega AS usuarioEntrega, m.nombre AS mascotaAdopcion, a.fecha AS fecha FROM adopcion a
			JOIN usuario u ON u.id = a.usuarioEntrega 
			JOIN mascota m ON m.id = a.idMascota) UNION 
	        (SELECT c.id, c.idMascota, c.fecha FROM cita c
			JOIN mascota m ON m.id = c.idMascota) UNION 
			(SELECT co.usuario, co.comentario, co.fecha FROM comentario co 
			JOIN usuario u ON u.id = co.usuario) UNION 
			(SELECT s.id, s.usuario, s.mascota, s.fecha FROM seguimiento s
			JOIN usuario u ON s.usuario = u.id 
			JOIN mascota m ON s.mascota = m.id)
			ORDER BY fecha DESC
			LIMIT 4";*/


	/*		id usuarioEntrega idMascota usuarioAdoptante fecha ADOPCIONNN

			id idMascota mascotaCitada moviliza fecha CITAAAA

			id usuario post comentario fecha COMENTARIOOOOO

			id usuario mascota fecha SEGUIMIENTOOOO





			(SELECT 'comment', title, comment_id AS id, created FROM comment)
UNION
(SELECT 'update', title, update_id as id, created FROM update)
UNION
(SELECT 'subscription', title, subscription_id as id, created 
  FROM subscription)
ORDER BY created desc*/

$sqlAdopciones = "SELECT m.id as mid,m.nombre as mnombre,m.foto as mfoto,u.id as uid,u.nombre as unombre,u.apellido as uapellido,u.foto as ufoto, a.fecha FROM adopcion a
					JOIN mascota m ON a.idMascota=m.id
					JOIN usuario u ON a.usuarioAdoptante=u.id
					ORDER BY a.fecha DESC 
					LIMIT 1";

$sqlCitas = "SELECT m.id as m1id, m.nombre as m1nombre, m2.id as m2id, m2.nombre as m2nombre,m2.foto as m2foto,m.foto as m1foto, c.fecha FROM cita c
			JOIN mascota m ON c.idMascota=m.id
			JOIN mascota m2 ON c.mascotaCitada=m2.id
			ORDER BY c.fecha DESC 
			LIMIT 1";

$sqlSeguimientos ="SELECT m.id as mid,m.nombre as mnombre,m.foto as mfoto,u.id as uid,u.nombre as unombre,u.apellido as uapellido,u.foto as ufoto, s.fecha FROM seguimiento s
			JOIN mascota m ON s.mascota=m.id
			JOIN usuario u ON s.usuario=u.id
			ORDER BY s.fecha DESC 
			LIMIT 2";

if($resultado = $con->query($sqlAdopciones)){

	    while ($row = $resultado->fetch_assoc()){
	    	echo '
	                           <tr>
	                              <td style="padding: 10px;">
	                                  <div class="row">
	                                  	   <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['ufoto']).'" width="50" height="60" alt="'.$row['unombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['unombre'].' '.$row['uapellido'].' adopto a '.$row['mnombre']. ' - <span class="textoBoldNaranjaOscuro">'.timeago($row['fecha']).'</span></p>
	                                       </div>
	                                       <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['mfoto']).'" width="50" height="60" alt="'.$row['mnombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                 </div>
	                                 <!--<div class="row">
	                                 	<div class="col-md-12">
	                                        <p class="text-center textoBoldNaranjaOscuro" style="vertical-align: middle;">'.timeago($row['fecha']).'</p>
	                                    </div>
	                                 </div>-->
	                              </td>
	                           </tr>';
	   	}

   }

if($resultado = $con->query($sqlCitas)){

	    while ($row = $resultado->fetch_assoc()){
	    	echo '
	                           <tr>
	                              <td style="padding: 10px;">
	                                  <div class="row">
	                                  	  <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['m1foto']).'" width="50" height="60" alt="'.$row['m1nombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['m1nombre'].' tiene una cita con '.$row['m2nombre']. ' - <span class="textoBoldNaranjaOscuro">' .timeago($row['fecha']).'</span></p>
	                                       </div>
	                                       <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['m2foto']).'" width="50" height="60" alt="'.$row['m2nombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                 </div>
	                                 <!--<div class="row">
	                                 	<div class="col-md-12">
	                                        <p class="text-center textoBoldNaranjaOscuro" style="vertical-align: middle;">'.timeago($row['fecha']).'</p>
	                                    </div>
	                                 </div>--> 
	                              </td>
	                           </tr>';
	   	}

   }


if($resultado = $con->query($sqlSeguimientos)){

	    while ($row = $resultado->fetch_assoc()){
	    	echo '
	                           <tr>
	                              <td style="padding: 10px;">
	                                  <div class="row">
	                                  	   <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['ufoto']).'" width="50" height="60" alt="'.$row['unombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['unombre'].' '.$row['uapellido'].' sigue a '.$row['mnombre']. ' - <span class="textoBoldNaranjaOscuro">' .timeago($row['fecha']).'</span></p>
	                                       </div>
	                                       <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['mfoto']).'" width="50" height="60" alt="'.$row['mnombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                 </div> 
	                              </td>
	                           </tr>';
	   	}

   }



?>