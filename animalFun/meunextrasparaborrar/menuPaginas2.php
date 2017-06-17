<?php

   if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
  }

?>

      <header>

              <ul class="nav navbar-nav navbar-right" id="navDerecha">
                
				 <li><a id="menu-toggle" href="#" class="textoBoldNaranjaClaro"id="loginButton">Ver Mas</a>
  
								<div id="sidebar-wrapper">
									  <ul class="sidebar-nav">
									  
										<a id="menu-close" href="#" class="btn btn-warning btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>
										<li class="sidebar-brand">
										 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
												
												</br>
												<strong><?php.$_SESSION['usuario'].?></strong>
													<p ><?php
													if(isset($fotoPerfilUsuario) && !empty($fotoPerfilUsuario)){
													  //Recordar que le saqué el span
													  echo '<img src="'.str_replace('../', '', $fotoPerfilUsuario).'" class="icon-size" height="50" height="50"/>';
													}else{
														echo '<span class="glyphicon glyphicon-user icon-size"></span>';
													}
													echo '</p>';
													?>
									 
										</li>
										
										<li>
												  </br>	 </br>	</br>		
										 <p><a href="adminUsuario.php" class="text-left"><strong>Mis datos</strong></a></p>
										</li>
										<li>
										   <p><a href="adminUsuarioMascotas.php" class="text-left"><strong>Mis mascotas</strong></a></p>
																				   
										</li>
										<li>
										   <p><a href="adminUsuarioAdopciones.php" class="text-left"><strong>Mis adopciones</strong></a></p>
																					
										</li>
										<li>
										 <p><a href="adminUsuarioCitas.php" class="text-left"><strong>Mis citas</strong></a></p>
										</li>
										<li>
										 <p><a href="generarQR.php" class="text-left"><strong>Generar QR</strong></a></p>
										</li>
										<li>
										 <p><a href="#" class="text-left"><strong>Encuentros</strong></a></p>
										</li>
										<li>
										 <p><a href="#" class="text-left"><strong>Amigos</strong></a></p>
										</li>
									  </ul>
						</div>
				</li>
              </ul>
			  	<script>
	  $("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper").toggleClass("active");
  });
	</script>
    </header>
		