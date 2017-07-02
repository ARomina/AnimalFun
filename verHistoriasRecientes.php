<?php
	
	$sql = "SELECT m.id, m.nombre, m.foto, p.contenido, p.fechaHora FROM post p
			JOIN mascota m ON m.id = p.mascota
			ORDER BY p.fechaHora DESC 
			LIMIT 4";

	if($resultado = $con->query($sql)){

	    while ($row = $resultado->fetch_assoc()){
	    	echo '
	                           <tr>
	                              <td style="padding: 10px;">
	                                  <div class="row">
	                                  	   <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['foto']).'" width="50" height="60" alt="'.$row['nombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['contenido'].'</p>
	                                       </div>
	                                       <div class="col-md-3" style="padding-top:4%;">
	                                       		<p class="text-center textoBoldNaranjaOscuro" style="vertical-align: middle;">'.timeago($row['fechaHora']).'</p>
	                                       </div>
	                                 </div> 
	                              </td>
	                           </tr>';
	   	}

   }

?>

<!-- Variante colorida de la tabla -->
<!-- <tr id="t-row">
	                              <td style="padding: 10px;">
	                                  <div class="row">
	                                  	   <div class="col-md-3 center-block">
		                                        <a href="#">
		                                          <img src="'.str_replace('../recursos/', 'recursos/', $row['foto']).'" width="50" height="60" alt="'.$row['nombre'].'" class="img-circle" style="margin-bottom: 4px;">
		                                       </a>
	                                       </div>
	                                       <div class="col-md-6" style="padding-top:5%;">
	                                       		<p class="text-center texto-azul textoBold" style="vertical-align: middle;">'.$row['contenido'].'</p>
	                                       </div>
	                                       <div class="col-md-3" style="padding-top:4%;">
	                                       		<p class="text-center textoBoldNaranjaOscuro" style="vertical-align: middle;">'.timeago($row['fechaHora']).'</p>
	                                       </div>
	                                 </div> 
	                              </td>
	                           </tr> -->