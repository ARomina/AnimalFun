<!-- Materia: Programación Web 2  / UNLaM 2017 -->
<!-- Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan-->
<!-- Alumnos: Barraza, A. Romina / Miharu, Lucas-->

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>INDEX 2</title>
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.css">
      <!-- <link rel="stylesheet" href="css/estilos.css"> -->
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
     

     <!--  <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css"> -->
      <!-- CUSTOM STYLE -->  
     <!--  <link rel="stylesheet" href="css/template-style.css"> -->
     <!--  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'> -->
     <!--  <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script> -->
      <!-- <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>    -->
   
   <!--  <meta name="description" content="">
    <meta name="author" content=""> -->

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos2.css">

   </head>
   <body>
	
		<!-- MENU -->
    <nav class="navbar navbar-default fondo" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="navbar-brand navbar-brand-centered">
            <a href="#"><img id="logo-navbar-middle" src="img/AnimalFun-logo-260x90-transp.png" alt="Logo Thing main logo"></a>
          </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
          <ul class="nav navbar-nav">
            <li><a href="#" class="textoMenu">Link</a></li>
            <li><a href="#" class="textoMenu">Link</a></li>
            <li><a href="#" class="textoMenu">Link</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="textoMenu">Link</a></li>
            <li><a href="#" class="textoMenu">Link</a></li>
            <li><a href="#" class="textoMenu">Link</a></li>         
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <!-- <header role="banner">
      <nav id="navbar-primary" class="navbar" role="navigation">
        <div class="container-fluid"> -->
          <!-- Brand and toggle get grouped for better mobile display -->
         <!--  <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="navbar-primary-collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#" class="textoMenu">Inicio</a></li>
              <li><a href="#" class="textoMenu">¿Quiénes somos?</a></li>
              <li><a href="#" class="textoMenu">Explorar</a></li>
              <li><a href="#" class="textoMenu"><img id="logo-navbar-middle" src="img/AnimalFun-logo-260x90-transp.png" alt="Logo Thing main logo"></a></li>
              <li><a href="#" class="textoMenu">Unirse</a></li>
              <li><a href="#" class="textoMenu">Iniciar sesión</a></li>
              <li><a href="#" class="textoMenu">Preguntas</a></li>
            </ul> -->
          <!-- </div> --><!-- /.navbar-collapse -->
        <!-- </div> --><!-- /.container-fluid -->
    <!--   </nav>
    </header> --><!-- header role="banner" -->

		 <!-- <header>
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

		<!--CAROUSEL-->
		    <!-- Half Page Image Background Carousel Header (AHORA ES UN DIV)-->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" id="carouselFoto1"></div>
                <div class="carousel-caption">
                    <h2>Foto 1</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" id="carouselFoto2"></div>
                <div class="carousel-caption">
                    <h2>Foto 2</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" id="carouselFoto3"></div>
                <div class="carousel-caption">
                    <h2>Foto 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </div>
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
      <script type="text/javascript" src="js/jquery-3.2.0.js"></script>
      <script type="text/javascript" src="js/bootstrap.js"></script>
	  <script type="text/javascript" src="js/carousel.js"></script>
       <!-- /.container -->

    <!-- jQuery -->
    <!-- <script src="js/jquery.js"></script>
 -->
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
   </body>
</html>