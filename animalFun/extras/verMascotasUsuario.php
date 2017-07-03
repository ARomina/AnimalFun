<?php 

	$sql = "SELECT id,nombre,foto FROM mascota WHERE usuario=".$_SESSION['id'];

	if($resultado = $con->query($sql)){
	    while ($row = $resultado->fetch_assoc()){
			echo '<a href="../usuarios/verPerfilMascota.php?idMascota='.$row['id'].'" title="'.$row['nombre'].'"><img height="200" src="';
			if (is_file('../'.$row['foto'])){
				echo '../'.$row['foto'];
			}else{
				echo '../../recursos/img/avatar-placeholder.jpg';
			}
			echo '" alt="'.$row['nombre'].'" title="'.$row['nombre'].'"/></a>';	
		}
		
	}
?>