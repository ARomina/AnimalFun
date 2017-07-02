
<?php
session_start();


//Include GP config file && User class
include_once'gpConfig.php';
include 'User.php';

if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link']
    );
    $userData = $user->checkUser($gpUserData);
	
	//Storing user data into session
	$_SESSION['userData'] = $userData;
	
	//Render facebook profile data
    if(!empty($userData)){
		$authUrl = $gClient->createAuthUrl();
	$boton = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"z">Google</a>';
        $first = $userData['first_name'];    
        $last = $userData['last_name'];  
		$email = $userData['email'];
        $Cerrar = '<p><h4>&nbsp;&nbsp;<a href="../google/logout.php"><button type="button" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a></h4></p></button>';
		
    }else{
        $output = '<h3 style="color:red">Usuario no encontrado</h3>';
    }
} else {
//Include GP config file
include_once 'gpConfig.php';
//Redirect to homepage
header("Location:login.php");
}
require_once  __DIR__ . '../../facebook/helper/facebookLogin/FacebookLogin2.php';

if( isset($_SESSION['login']) && $_SESSION['login']){
	$user=$_SESSION['userName'];
	$user2=explode(" ", $user);
	$user = str_replace(' ', '', $user);
	$correo='falta ingresar mail';//$_SESSION['userMail'];

} else {
    echo "<h3>Error: Usted no se encuentra logueado.</h3>";
    //header('Location: ./index.php');
}

$facebookLogin = new FacebookLogin();
?>
<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - El lugar para tus mascotas</title>
      <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="../img/favicon.ico" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../css/bootstrap.css">
      <link rel="stylesheet" href="../css/components.css">
      <link rel="stylesheet" href="../css/responsee.css">

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <!-- <link href="css/half-slider.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/estilosMenuPaginas.css">
    <link href="../css/font-awesome.css" rel="stylesheet">

   </head>
   <body>
  
		<!-- MENU -->
		<?php include("../menuPaginas.php");?>
		<!--Fin menu-->

	<div id="wrap">

		<!-- Sección: formulario de registro -->
		<div class="container">
		    <div class="omb_login">
		    	<h3 class="omb_authTitle">Regístrate con </h3>

				<div class="row omb_row-sm-offset-3 omb_socialButtons">
		    	    <div class="col-xs-4 col-sm-2">
					<?php echo '<a href="' . $facebookLogin->getLoginUrl() . '" class="btn btn-lg btn-block omb_btn-facebook">'?>
					        <i class="fa fa-facebook visible-xs"></i>
					        <span class="hidden-xs">Facebook</span>
				        </a>
			        </div>
		        	
		        	<div class="col-xs-4 col-sm-2">
				        <a href="redirectGoogle.php" class="btn btn-lg btn-block omb_btn-google">
					      
					        <span class="hidden-xs">Google+</span>
				        </a>
			        </div>	
				</div>

				<div class="row omb_row-sm-offset-3 omb_loginOr">
					<div class="col-xs-12 col-sm-6">
						<hr class="omb_hrOr">
						<span class="omb_spanOr">ó</span>
					</div>
				</div>	
			</div>

		    <div id="login-overlay" class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-body">
		                <div class="row">
		                    <div class="col-xs-12">
		                        <div class="well">
		                        <span><?php  ?></span>
							        <form class="sa-innate-form" action="" method="POST">
							        			<label for="usuario" class="control-label">Usuario </label>
									            <input type="text" name="usuario" class="form-control" id="usuario"  value="<?php echo $first.$last;?>" required="" title="nombre del perfil" placeholder="usuario">
												      <span class="alerta" id="alertaUsuario">Campo obligatorio. Debe tener entre 4 y 10 caracteres, sólo letras y números</span></br>
									            <label for="nombre" class="control-label">Nombre </label>
									            <input type="text" name="nombre" class="form-control" id="nombre"  value="<?php echo $first;?>" required="" title="nombre del perfil" placeholder="nombre">
												      <span class="alerta" id="alertaNombreUsuario">Campo obligatorio. Puede contener sólo letras y espacios</span></br>
									           	<label for="apellido"lass="control-label">Apellido </label>
									            <input type="text" name="apellido" class="form-control" id="apellido"  value="<?php echo $last;?>" required="" title="apellido del perfil" placeholder="apellido">
												      <span class="alerta" id="alertaApellidoUsuario">Campo obligatorio. Puede contener sólo letras y espacios</span></br>
												<label for="correo"lass="control-label">Correo electrónico </label>
									            <input type="text" name="correo" class="form-control" id="correo"  value="<?php echo $email;?>" required="" title="correo" placeholder="correo">
												      <span class="alerta" id="alertaCorreo">Campo obligatorio. La dirección debe tener un formato válido</span></br>
												<label for="correo2"lass="control-label">Repita correo electrónico</label>
									            <input type="text" name="correo2" class="form-control" id="correo2"  value="" required="" title="correo" placeholder="correo">
												      <span class="alerta" id="alertaCorreo2">Campo obligatorio. La dirección debe tener un formato válido y concidir con lo ingresado antes</span></br>
												<label >Contraseña</label>
									            <input  class="form-control" type="password" name="password" placeholder="password"  value="123456" required="" title="Por favor, ingrese su contraseña"for="password" id="password"></br>
									            <span class="alerta" id="alertaContrasenia">La contraseña no puede estar vacía y debe tener entre 6 y 8 caracteres</span>
									            <label >Repita contraseña</label>
									            <input  class="form-control" type="password" name="repassword" placeholder="repassword"  value="123456" required="" title="Por favor, ingrese su contraseña"for="repassword" id="repassword"></br>
									            <span class="alerta" id="alertaContrasenia2">La contraseña no puede estar vacía, debe tener entre 6 y 8 caracteres y deb coincidir con lo ingresado antes</span>
												<div id="loginErrorMsg" class="alert alert-error hide">Contraseña o usuario incorrectos</div>
												<div class="checkbox">
				                                   <!--  <label>
				                                        <input type="checkbox" name="remember" id="remember"> Recordarme
				                                    </label> -->
													<label>
				                                        <input type="checkbox" name="checkboxCondiciones" id="checkboxCondiciones"> Acepto los términos y condiciones
				                                        <span class="alerta" id="alertaCheckbox">Debe leer y aceptar las condiciones del sitio</span> 
				                                    </label>
			                                    </div>
									    		<button type="button" value="registro" name="submit" class="btn btn-lg btn-primary btn-block" onClick="registro()">¡Registrarme!</button>
								    </form>
								</div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div><!-- div container -->
		<!-- Fin registro -->

	</div><!-- div wrap -->

	<div id="push"></div>

     	<!-- FOOTER -->
		<div class="row" id="div-footer">
			 <div class="col-xs-12 col-sm-12 col-md-4" id="footer-izquierda">
				<p class="textoBoldBlanco">¿Preguntas, dudas? ¡Hacé click <a href="#">aquí</a>!</p>
			 </div>
			 <div class="col-xs-12 col-sm-12 col-md-4" id="footer-centro">
				<p class="textoBoldBlanco">Programación Web 2</p>
			 </div>
		</div>
		<!-- FOOTER -->

		<!-- Modal -->
	    <div class="modal fade" id="myModal" role="dialog">
	        <div class="modal-dialog">

		        <!-- Modal content-->
		        <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          <h4 class="modal-title text-center textoBold">Registro</h4>
			        </div>
			        <div class="modal-body text-center">
			          <p id="mensajeModal"></p>
			        </div>
		        </div>
	        </div>
	    </div>

      <script type="text/javascript" src="../js/jquery-3.2.0.js"></script>
      <script type="text/javascript" src="../js/bootstrap.js"></script>
      <script type="text/javascript" src="../js/registroValidacion.js"></script>	 
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
     <!--  <script type="text/javascript" src="js/responsee.js"></script> -->
     <!--  <script type="text/javascript" src="js/loginValidacion.js"></script>	  --> 
   </body>
</html>