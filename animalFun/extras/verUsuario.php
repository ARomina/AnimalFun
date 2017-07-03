<?php 

  $usuario = $_SESSION['usuario'];
  $sql = "SELECT posicion,correo,telefono,fechanac FROM usuario WHERE usuario='".$_SESSION['usuario']."'"; 
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
	  echo '<p><i class="fa fa-location-arrow" aria-hidden="true"></i> '.$row['posicion'].'</p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i> '.$row['correo'].'</p>
                <p><i class="fa fa-phone" aria-hidden="true"></i> '.$row['telefono'].'</p>
                <p><i class="fa fa-birthday-cake" aria-hidden="true"></i> '.$row['fechanac'].'</p>';

?>