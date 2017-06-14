<?php

   if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
  }

?>

<!-- MENU -->
   <!--   <header>
       <nav class="line">
           <div class="top-nav">

            <div class="top-nav s-12 l-5">
              <ul class="right top-ul chevron">
                <li><a href="../animalFun/index.php">Inicio</a></li>
                <li><a href="#">¿Quiénes somos?</a></li>
                <li><a href="#">Explorar</a></li>
              </ul>
            </div>

            <ul class="s-12 l-2" id="navItemCentro">
              <li class="logo hide-s hide-m" >
                <a href="../design/"><img src="img/AnimalFun-logo-260x90-transp.png"/></a>
              </li>
            </ul>

            <div class="top-nav s-12 l-5">
              <ul class="left top-ul chevron">
                <li><a href="#">Unirse</a></li>
                <li><a href="../animalFun/login.php">Iniciar sesión</a></li>
                <li><a href="#">Preguntas</a></li>
              </ul> 
            </div>

           </div>
       </nav>
      </header> -->

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
              <a class="navbar-brand text-hide" href="index.php"></a>
            </div>
            <div id="navbarMenu" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-left" id="navIzquierda">
                <li class="active"><a href="index.php" class="textoBoldNaranjaClaro">Inicio</a></li>
                <li><a href="explorar.php" class="textoBoldNaranjaClaro">Explorar</a></li>
                <li><a href="adopciones.php" class="textoBoldNaranjaClaro">Adopciones</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right" id="navDerecha">
                <li><a href="unirse.php" class="textoBoldNaranjaClaro">Unirse</a></li>
                 <?php 
                  if(!isset($_SESSION['usuario'])){
                    echo '<li><a href="login.php" class="textoBoldNaranjaClaro" id="loginButton">Log in</a></li>';
                  }else{
                    echo '<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="glyphicon glyphicon-user"></span> 
                                <strong>'.$_SESSION['usuario'].'</strong>
                                <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="navbar-login">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <p class="text-center">';
                                                if(isset($fotoPerfilUsuario) && !empty($fotoPerfilUsuario)){
                                                  //Recordar que le saqué el span
                                                  echo '<img src="'.str_replace('../', '', $fotoPerfilUsuario).'" class="icon-size" height="80" height="80"/>';
                                                }else{
                                                    echo '<span class="glyphicon glyphicon-user icon-size"></span>';
                                                }
                                                echo '</p>
                                            </div>
                                            <div class="col-lg-8">
                                                <p><a href="adminUsuario.php" class="text-left"><strong>Mis datos</strong></a></p>
                                                <p><a href="adminUsuarioMascotas.php" class="text-left"><strong>Mis mascotas</strong></a></p>
                                                <p><a href="adminUsuarioAdopciones.php" class="text-left"><strong>Mis adopciones</strong></a></p>
                                                <p><a href="adminUsuarioCitas.php" class="text-left"><strong>Mis citas</strong></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="navbar-login navbar-login-session">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p>
                                                    <a href="extras/procesaLogOut.php" class="btn btn-danger btn-block">Cerrar Sesión</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>';
                }
                ?>
              </ul>
            </div>
            <!--/.nav-collapse -->
          </div>
          <!--/.container-fluid -->
        </nav>
    </header>