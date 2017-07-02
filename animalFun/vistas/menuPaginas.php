<?php

   if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
	
  }

?>

    <style>
   #sidebar-wrapper {
    margin-right: -250px;
    right: 0;
    width: 250px;
  top:0px;
    background: rgb(31,197,163);
    position: fixed;
    height: 100%;

    z-index: 1000;
    transition: all 0.5s ease-in 0s;
    -webkit-transition: all 0.5s ease-in 0s;
    -moz-transition: all 0.5s ease-in 0s;
    -ms-transition: all 0.5s ease-in 0s;
    -o-transition: all 0.5s ease-in 0s;
  }

  .sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    list-style: none;
    margin: 0;
    padding: 0;
  }

  .sidebar-nav li {
    line-height: 50px;
    text-indent: 20px;
  }

  .sidebar-nav li a {
    color: #264043;
    display: block;
    text-decoration: none;
  }

  .sidebar-nav li a:hover {
    color: #264043;
    background: rgba(254,220,68,0.8);
    text-decoration: none;
  }

  .sidebar-nav li a:active, .sidebar-nav li a:focus {
    text-decoration: none;
  }

  .sidebar-nav > .sidebar-brand {
    height: 55px;
    line-height: 55px;
    font-size: 18px;
  }

  .sidebar-nav > .sidebar-brand a {
    color: #999999;
  }

  .sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
  }

  #menu-toggle {
    top: 15px;
    right: 15px;
    position: fixed;
    z-index: 1;
  }

  #sidebar-wrapper.active {
    right: 250px;
    width: 250px;
    transition: all 0.5s ease-out 0s;
    -webkit-transition: all 0.5s ease-out 0s;
    -moz-transition: all 0.5s ease-out 0s;
    -ms-transition: all 0.5s ease-out 0s;
    -o-transition: all 0.5s ease-out 0s;
  }

  .toggle {
    margin: 5px 5px 0 0;
  }

  #nombreUsuarioMenu{
    background-color: #1FC5A3; 
    color: #ffffff;
    padding-left: 10px; 
    padding-right: 10px;
  }

  </style>
<!-- MENU -->

      <header>
      <nav class="navbar example-8">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarMenu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand text-hide" href="http://animalFun.fun/animalFun/index.php"></a>
            </div>
            <div id="navbarMenu" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-left" id="navIzquierda">
                <li class="active"><a href="http://animalfun.fun/animalFun/index.php" class="textoBoldNaranjaClaro">Inicio</a></li>
                <li><a href="http://animalfun.fun/animalFun/vistas/secciones/explorar.php" class="textoBoldNaranjaClaro">Explorar</a></li>
                <li><a href="http://animalfun.fun/animalFun/vistas/secciones/adopciones.php" class="textoBoldNaranjaClaro">Adopciones</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right" id="navDerecha">
                <?php 
                  if(!isset($_SESSION['usuario'])){
                    echo '
					<li><a href="http://animalfun.fun/animalFun/vistas/secciones/unirse.php" class="textoBoldNaranjaClaro">Unirse</a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 
					<li><a href="http://animalfun.fun/animalFun/vistas/secciones/login.php" class="textoBoldNaranjaClaro" id="loginButton">Log in</a></li>';
                  }else{
				
                    echo  '  <li><a id="menu-toggle" href="http://animalFun.fun/animalFun/vistas/usuarios/home.php" class="textoBoldNaranjaClaro"id="loginButton"><p class="text-center" id="nombreUsuarioMenu"><strong>'.$_SESSION['usuario'].'</strong>&nbsp;&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></p></a>
					<ul class="nav navbar-nav navbar-right" id="navDerecha">
                
							
  
								<div id="sidebar-wrapper">
									  <ul class="sidebar-nav">
									  
										<a id="menu-close" href="http://animalFun.fun/animalFun/vistas/usuarios/adminUsuario.php" class="btn btn-warning btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>
										<li class="sidebar-brand">
										<p class="text-center"><strong>'.$_SESSION['usuario'].'</strong></p>
										
													<p class="text-center">
														<a href="http://animalFun.fun/animalFun/vistas/usuarios/adminUsuario.php" >';
                              if(basename($_SERVER['PHP_SELF']) != 'index.php'){
                                echo '<img src="'.str_replace('../recursos/', '../../recursos/', $fotoPerfilUsuario).'"';
                              }else{
                                echo '<img src="'.str_replace('../recursos/', 'recursos/', $fotoPerfilUsuario).'"';
                              }
                              echo '" class="img-rounded" alt="Foto de perfil de '.$_SESSION['usuario'].'" width="100" height="100"/></a>
													</p>
										</li>
										
									
										<li>
											</br>	 </br>	</br>		
										  <a href="http://animalFun.fun/animalFun/vistas/usuarios/adminUsuarioMascotas.php" class="text-left"><strong>Mis mascotas</strong></a>								   
										</li>
										<li>
										   <a href="http://animalFun.fun/animalFun/vistas/usuarios/adminUsuarioAdopciones.php" class="text-left"><strong>Mis adopciones</strong></a>								
										</li>
										<li>
										 <p><a href="http://animalFun.fun/animalFun/vistas/usuarios/adminUsuarioCitas.php" class="text-left"><strong>Mis citas</strong></a></p>
										</li>
										<li>
										 <p><a href="http://animalFun.fun/animalFun/extras/generarQR.php" class="text-left"><strong>Generar QR</strong></a></p>
										</li>
										<li>
										 <p><a href="#" class="text-left"><strong>Amigos</strong></a></p>
										</li>
										<li>
										 <a href="http://animalFun.fun/animalFun/extras/procesaLogOut.php" class="btn btn-danger btn-block">Cerrar Sesión</a>
										</li>
									  </ul>
						</div>
				</li>
              </ul>';
					
			
					
                }
                ?>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
          <!--/.container-fluid -->
        </nav>
		
    </header>
	