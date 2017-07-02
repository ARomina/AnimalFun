<?php

	$sql = "SELECT M.id,M.nombre,M.foto,(SELECT COUNT(*)
					  FROM valoracion v1
					  JOIN post p1 ON v1.post=p1.id
					  WHERE p1.mascota=M.id)*10+
					 (SELECT COUNT(*)
					  FROM visita
					  WHERE mascota=M.id)+
					 (SELECT COUNT(*)
					  FROM seguimiento
					  WHERE mascota=M.id
					 )*50 AS puntaje
			FROM mascota M
			ORDER BY puntaje DESC
			LIMIT 4";

	$puesto = 1;

	if($resultado = $con->query($sql)){

	    while ($row = $resultado->fetch_assoc()){

	    		echo '
	                           <tr>
	                              <td style="padding: 10px;">
	                                  <div class="row">
	                                  	   <div class="col-md-3" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.
	                                       			$puesto.'° - </p>
	                                       </div>
	                                  	   <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['foto']).'" width="50" height="60" alt="'.$row['nombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['nombre'].'</p>
	                                       </div>
	                                       <!--<div class="col-md-3" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['puntaje'].'</p>
	                                       </div>-->
	                                 </div> 
	                              </td>
	                           </tr>';
	                           $puesto+=1;
	    	}

   }

?>