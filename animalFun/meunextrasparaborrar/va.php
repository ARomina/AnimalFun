<?php

   if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	 #sidebar-wrapper {
    margin-right: -250px;
    right: 0;
    width: 250px;
    background: rgb(0,0,0);
    position: fixed;
    height: 100%;
    overflow-y: auto;
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
    color: #999999;
    display: block;
    text-decoration: none;
  }

  .sidebar-nav li a:hover {
    color: #fff;
    background: rgba(255,255,255,0.2);
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
    top: 0;
    right: 0;
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
	</style>
 </head>
  <body>
  
    
      
  <li><a id="menu-toggle" href="#" class="textoBoldNaranjaClaro"id="loginButton">asdfasdasdf</a></li>

  
<div id="sidebar-wrapper">
  <ul class="sidebar-nav">
    <a id="menu-close" href="#" class="btn btn-default btn-lg pull-right toggle"><i class="glyphicon glyphicon-remove"></i></a>
    <li class="sidebar-brand">
	 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               
                                <strong><?php'.$_SESSION['usuario'].'?></strong>
                                
                            </a>
	   <p class="text-center">
                                                <?php
												if(isset($fotoPerfilUsuario) && !empty($fotoPerfilUsuario)){
                                                  //Recordar que le saqué el span
                                                  echo '<img src="'.str_replace('../', '', $fotoPerfilUsuario).'" class="icon-size" height="80" height="80"/>';
                                                }else{
                                                    echo '<span class="glyphicon glyphicon-user icon-size"></span>';
                                                } ?>
                                              
                                             
    </li>
	<li>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
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
  </body>
</html>