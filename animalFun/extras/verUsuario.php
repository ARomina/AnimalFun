<?php 

  $sql = "SELECT * FROM usuario WHERE id='$idUsuario'"; 
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
	  echo ' <img src="'.str_replace('../recursos/', '../../recursos/', $row['foto']).'" height="250" width="250" class="center-block">
	  			<!--<p><i class="fa fa-location-arrow" aria-hidden="true"></i> '.$row['posicion'].'</p>-->
                <p><i class="fa fa-envelope" aria-hidden="true"></i> '.$row['correo'].'</p>
                <!--<p><i class="fa fa-phone" aria-hidden="true"></i> '.$row['telefono'].'</p>-->
                <p><i class="fa fa-birthday-cake" aria-hidden="true"></i> '.$row['fechaNac'].'</p>';
?>