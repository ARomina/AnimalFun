<?php
  
  /* Materia: Programación Web 2  / UNLaM 2017 
     Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan
     Alumnos: Barraza, A. Romina / Miharu, Lucas / Suárez, Pablo */

  include_once "../../conexion.php";

 
  session_start();

  if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $fotoPerfilUsuario = $_SESSION['foto'];
	
  }

  $idMascota = $_GET['idMascota'];

  //Query para traer el nombre de la mascota
  $sql = "SELECT nombre, foto from mascota WHERE id = '$idMascota'";

  $resultado = mysqli_query($con, $sql);

  while($row = $resultado->fetch_assoc()){
        $nombre = $row['nombre'];
        $fotoMascota = $row['foto'];
  }

?>

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - El lugar para tus mascotas</title>
      <link rel="shortcut icon" href="../../recursos/img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="../../recursos/img/favicon.ico" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="../../recursos/css/bootstrap.css">

    <!-- Bootstrap Core CSS -->
    <link href="../../recursos/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../recursos/css/half-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="../../recursos/css/estilos.css">
    <link rel="stylesheet" href="../../recursos/css/estilosMenuPaginas.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="../../recursos/css/estilosPerfilUsuario.css">
    <link href="../../recursos/css/font-awesome.css" rel="stylesheet">
       
       <style>   
          body{background-color:#ECF0F1;}

          .navbar-inverse {
              background-color: #34495E;
              border-color: #34495E;
          }

          .btn-default {
              color: #333;
              background-color: #009688;
              border-color: #009688;
              border-radius:0px;
              color:#fff;
          }

          #blog-section{
            /*margin-top:40px;*/
            margin-bottom:80px;
          }

          .content-title{padding:5px;background-color:#fff;}
          .content-title h3 a{color:#34495E;text-decoration:none; transition: 0.5s;}
          .content-title h3 a:hover{color:#F39C12; }
          .content-footer{background-color:#233d40;padding:10px;position: relative;}
          .content-footer span a {
              color: #fff;
              display: inline-block;
              padding: 6px 5px;
              text-decoration: none;
              transition: 0.5s;
          }
          .content-footer span a:hover{     
              color:#F39C12;   
          }
          aside{
              margin-top: 30px;
              -webkit-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
          -moz-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
          box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);}
          aside .content-footer>img {
              width: 33px;
              height: 33px;
              border-radius: 100%;
              margin-right: 10px;
              border: 2px solid #fff;
          }

          .user-ditels {
              width: 300px;
              top: -100px;
              height: 100px;
              padding-bottom: 99px;
              position: absolute;
              border: solid 2px #fff;
              background-color: #34495E;
              right: 25px;
              display: none;
              z-index: 1;
          }

          @media (max-width:768px){
              .user-ditels {   
              right: 5px;   
          }
              
          }
          .user-small-img{cursor: pointer;}

          .content-footer:hover .user-ditels  {
              display: block;
          }


          .content-footer .user-ditels .user-img{width: 100px;height:100px;float: left;}
          .user-full-ditels h3 {
              color: #fff;
              display: block;
              margin: 0px;
              padding-top: 10px;
              padding-right: 28px;
              text-align: right;
          }
          .user-full-ditels p{    
              color: #fff;
              display: block;
              margin: 0px;
               padding-right: 20px;
              padding-top: 5px;
             text-align: right;}
          .social-icon {
              background-color: #fff;
              margin-top: 10px;
              padding-right: 20px;
              text-align: right;
          }
          .social-icon>a{font-size:20px;text-decoration:none;padding: 5px;}
          .social-icon a:nth-of-type(1){color:#4E71A8;}
          .social-icon a:nth-of-type(2){color:#3FA1DA;}
          .social-icon a:nth-of-type(3){color:#E3411F;}
          .social-icon a:nth-of-type(4){color:#CA3737;}
          .social-icon a:nth-of-type(5){color:#3A3A3A;}


          /*recent-post-col////////////////////*/
          .widget-sidebar {
              background-color: #fff;
              padding: 20px;
              margin-top: 30px;
          }

          .title-widget-sidebar {
              font-size: 14pt;
              border-bottom: 2px solid #e5ebef;
              margin-bottom: 15px;
              padding-bottom: 10px;    
              margin-top: 0px;
          }

          .title-widget-sidebar:after {
              border-bottom: 2px solid #f1c40f;
              width: 150px;
              display: block;
              position: absolute;
              content: '';
              padding-bottom: 10px;
          }

          .recent-post{width: 100%;height: 80px;list-style-type: none;}
          .post-img img {
              width: 100px;
              height: 70px;
              float: left;
              margin-right: 15px;
              border: 5px solid #233d40;
              transition: 0.5s;
          }

          .recent-post a {text-decoration: none;color:#34495E;transition: 0.5s;}
          .post-img, .recent-post a:hover{color:#F39C12;}
          .post-img img:hover{border: 5px solid #F39C12;}

          /*===============ARCHIVES////////////////////////////*/

          button.accordion {
              background-color: #233d40;
              color: #fff;
              cursor: pointer;
              padding: 18px;
              width: 100%;
              border: none;
              text-align: left;
              outline: none;
              font-size: 15px;
              transition: 0.4s;
          }

          button.accordion.active, button.accordion:hover {
              background-color: #F39C12;color: #fff;
          }

          button.accordion:after {
              content: '\002B';
              color: #fff;
              font-weight: bold;
              float: right;
              margin-left: 5px;
          }

          button.accordion.active:after {
              content: "\2212";
          }

          .panel {
              padding: 0 18px;
              background-color: white;
              max-height: 0;
              overflow: hidden;
              transition: max-height 0.2s ease-out;
          }

          /*categories//////////////////////*/

          .categories-btn{
              background-color: #F39C12;
              margin-top:30px;
              color: #fff;
              cursor: pointer;
              padding: 18px;
              width: 100%;
              border: none;
              text-align: left;
              outline: none;
              font-size: 15px;
              transition: 0.4s;
              
          }
          .categories-btn:after {
              content: '\25BA';
              color: #fff;
              font-weight: bold;
              float: right;
              margin-left: 5px;
          }
          .categories-btn:hover {
              background-color: #233d40;color: #fff;
          }

          .form-control{border-radius: 0px;}

          .btn-warning {
              border-radius: 0px;
              background-color: #F39C12;
              margin-top: 15px;
          }
          .input-group-addon{border-radius: 0px;}
        </style>

   </head>
   <body>

    <!-- MENU -->
    <?php include("../../vistas/menuPaginas.php");?>

     <div class="row">
            <div class="col-md-12">
              <ul class="list-inline pull-right" style="padding-top: 2%; margin-right: 5%;">
                <li>
                  <a href="verTodosDatosMascota.php?idMascota=<?php echo $idMascota;?>" class="btn boton2"><i class="fa fa-paw" aria-hidden="true"></i> Ver datos de mascota</a>
                </li>
                <li>
                  <a href="modifDatosMascota.php?idMascota=<?php echo $idMascota;?>" class="btn boton2"><i class="fa fa-pencil" aria-hidden="true"></i> Editar datos de mascota</a>
                </li>
                <li>
                  <a href="verPerfilMascota.php?idMascota=<?php echo $idMascota;?>" class="btn boton2"><i class="fa fa-qrcode" aria-hidden="true"></i> Generar QR</a>
                </li>
                <!-- AGREGAAAA TUS BOTONES ACAA (??) -->
              </ul>
            </div>
      </div>

    <section id="blog-section" >
     <div class="container">
       <div class="row">
           <!-- Columna derecha -->
                    <div class="col-lg-4">
                      <div class="widget-sidebar">     
                        <?php include("../../extras/infoMascota.php");?>

                        <?php 

                          $sql = "SELECT count(*) FROM seguimiento s WHERE s.mascota = '$idMascota'";

                          if ($resultado = $con->query($sql)) {

                              while ($row = $resultado->fetch_row()) {

                                  if($row[0] == 0){
                                     echo '<h2 class="title-widget-sidebar">Seguidores <span class="badge badge-pill badge-success">'.$row[0].'</span></h2>
                                              <div class="content-widget-sidebar">
                                                  <div class="center-block">
                                                    <ul style="list-style: none; padding-left: 0;">
                                                      <li style="padding-bottom: 10px;">
                                                          <p>Aún no tienes seguidores</p>
                                                      </li>
                                                  </div>
                                              </div>';
                                  }else{
                                    echo '<h2 class="title-widget-sidebar">Seguidores <span class="badge badge-pill badge-success">'.$row[0].'</span></h2>
                                          <div class="content-widget-sidebar">
                                            <div class="center-block">
                                              <ul style="list-style: none; padding-left: 0;">';
                                                include("../../extras/infoMascotaSeguidores.php"); 
                                        echo '</ul>
                                                <a href="#" class="btn boton2"><i class="fa fa-users" aria-hidden="true"></i> Ver más seguidores</a>
                                              </div>
                                          </div>';
                                      
                                  }
                              }
                          }
                        ?>

                       </div><!--widget sidebar -->    
                    </div><!-- de col-4 -->


        <!-- Columna central -->
        <div class="col-lg-4">
          <div class="row">

                <div class="col-lg-12 col-md-12">
                     <aside>
                       <div class="content-title">
                          <div class="form-group">
                            <div class="content-footer">
                              <img class="user-small-img" src="<?php
                                                                  if(isset($fotoMascota)){
                                                                    echo str_replace('../recursos/', '../../recursos/', $fotoMascota);
                                                                  }else{
                                                                    echo '../../recursos/img/avatar-placeholder.jpg';
                                                                  }
                                                                ?>">
                              <span style="font-size: 16px;color: #fff;">Publicar nuevo post..</span>
                            </div>
                            <form action="#" method="POST" enctype="multipart/form-data" id="formularioPost">
                              <textarea class="form-control" rows="5" id="contenidoPost" name="contenidoPost" placeholder="Contenido del posteo..."></textarea>
                              <label for="fotoPost" class="control-label">Subir foto</label>
                              <input name="fotoPost" type="file" id="fotoPost"/>
                              <!-- <label for="fotoVideo" class="control-label">Subir URL de video</label>
                              <input name="videoPost" type="text" id="videoPost" class="form-control"/> -->
                              <hr>
                              <input type="hidden" value="<?php echo $idMascota?>" id="idMascota" name="idMascota"/>
                              <button type="button" class="btn btn-success pull-right" onClick="subirPostMascota()">Postear</button>
                              <br>
                            </form>
                          </div>
                      </div>
                    </aside>
                </div>

		       <?php include("../../extras/verPostsPerfilMascota.php");?>
              
            </div><!-- row -->
          </div><!-- col-4 -->
         
                     
          <!-- Columna izquierda -->
                  <div class="col-lg-4">
                    <div class="row">           
                      <div class="widget-sidebar">
                        <h2 class="title-widget-sidebar">Estado </h2>
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-md-offset-3">
                             <div class="content-widget-sidebar">
                                  <div class="text-center">
                                    <p class="btn" style="padding: 20px; font-weight: bold; background-color: #FF9D27;
  color: #ffffff;">EN ADOPCION</p>
                                  </div>
                              </div>
                            </div>
                            </div>
                            <br>
                           
                      </div>

                      <div class="widget-sidebar">
                        <h2 class="title-widget-sidebar">Comparación</h2>
                             <div class="content-widget-sidebar">
                                  <div class="center-block">
                                    
                                  </div>
                              </div>
                            <br>
                           
                      </div>

                  <!--=====================
                         CATEGORIES
                    ======================-->
                      <!--  <div class="widget-sidebar">
                        <h2 class="title-widget-sidebar">// CATEGORIES</h2>
                           <button class="categories-btn">Audio</button>
                           <button class="categories-btn">Blog</button>
                           <button class="categories-btn">Gallery</button>
                           <button class="categories-btn">Images</button>
                       </div> -->  
                      </div><!-- row -->
                    </div><!-- col-4 -->
          			
                </div><!-- row de toda la seccion -->
          		   </br></br>
          		    	
            </div><!-- container de todo-->
               
        </section>

    <div id="push"></div>


       <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center textoBold">Nuevo post</h4>
              </div>
              <div class="modal-body text-center">
                <p id="mensajeModal"></p>
              </div>
            </div>
          </div>
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

<!--     <script type="text/javascript" src="../../recursos/js/jquery-3.1.1.js"></script> -->
    <script type="text/javascript" src="../../recursos/js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="../../recursos/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../recursos/js/carousel.js"></script>
    <script type="text/javascript" src="../../recursos/js/subirPost.js"></script>
  
  <script>
        /* $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip(); 
         });*/

        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
          acc[i].onclick = function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          }
        }
  </script> 	 
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