<!-- Materia: Programación Web 2  / UNLaM 2017 -->
<!-- Profesores: Rusticcini, Alejandro / D'aranno, Facundo / Uran, Jhonatan-->
<!-- Alumnos: Barraza, A. Romina / Miharu, Lucas-->

<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <title>AnimalFun - El lugar para tus mascotas</title>
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
      <link rel="icon" href="img/favicon.ico" type="image/x-icon">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/bootstrap.css">
   <!--    <link rel="stylesheet" href="css/estilos.css"> -->
<!--       <link rel="stylesheet" href="css/components.css"> -->
<!--       <link rel="stylesheet" href="css/responsee.css"> -->
     
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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilosMenuPaginas.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilosPerfilUsuario.css">


   </head>
   <body>
  
    <!-- MENU -->
    <?php include("menuPaginas.php");?>

    <!-- Sección: Rankings, etc. -->
      <div class="row" style="margin-top: -20px;">
            <div class="col-md-12 text-center">
               <h2 class="titulo-central">Perfil de {dueño}</h2>
            </div>
      </div>
      <div class="container">
          <section class="container ng-scope ng-fadeInLeftShort" style="">
              <!-- uiView:  --><div class="ng-fadeInLeftShort ng-scope" style="">
              <div class="container-overlap bg-blue-500 ng-scope">
                <div class="media m0 pv">
                  <div class="media-left"><a href="#"><img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User" class="media-object img-circle thumb64"></a></div>
                  <div class="media-body media-middle">
                    <h4 class="media-heading text-white">Christine Matthews</h4>
                    <span class="text-white">Sed eget lacus quis diam molestie mollis.</span>
                  </div>
                </div>
              </div>
              <div class="container-fluid ng-scope">
                <div class="row">
                  <!-- Left column-->
                  <div class="col-md-7 col-lg-8">
                    <form class="card ng-pristine ng-valid">
                      <h5 class="card-heading pb0">
                          About
                      </h5>
                      <div class="card-body">
                        <p class="ng-scope ng-binding editable">Pellentesque porta tincidunt justo, non fringilla erat iaculis in. Sed nisi erat, ornare eu pellentesque quis, pellentesque non nulla. Proin rutrum, est pellentesque commodo mattis, sem justo porttitor odio, id aliquet lacus augue nec nisl.</p>
                      </div>
                      <div class="card-divider"></div>
                      <div class="card-offset">
                        <div class="card-offset-item text-right">
                          <button type="button"  class="btn-raised btn btn-warning btn-circle btn-lg"><em class="fa fa-edit"></em></button>
                          <button type="submit" class="btn-raised btn btn-success btn-circle btn-lg ng-hide"><em class="fa fa-check"></em></button>
                        </div>
                      </div>
                      <h5 class="card-heading pb0">Contact Information</h5>
                      <div class="card-body">
                        <table class="table table-striped">
                          <tbody>
                            <tr>
                              <td><em class="ion-document-text icon-fw mr"></em>Area</td>
                              <td class="ng-binding">Research &amp; development</td>
                            </tr>
                            <tr>
                              <td><em class="ion-egg icon-fw mr"></em>Birthday</td>
                              <td><span class="ng-scope ng-binding editable">10/11/2000</span></td>
                            </tr>
                            <tr>
                              <td><em class="ion-ios-body icon-fw mr"></em>Member since</td>
                              <td><span class="ng-scope ng-binding editable">05/11/2015</span></td>
                            </tr>
                            <tr>
                              <td><em class="ion-man icon-fw mr"></em>Gender</td>
                              <td><span class="ng-scope ng-binding editable">Female</span></td>
                            </tr>
                            <tr>
                              <td><em class="ion-android-home icon-fw mr"></em>Address</td>
                              <td><span class="ng-scope ng-binding editable">Some street, 123</span></td>
                            </tr>
                            <tr>
                              <td><em class="ion-email icon-fw mr"></em>Email</td>
                              <td><span class="ng-scope editable"><a href="" class="ng-binding">user@mail.com</a></span></td>
                            </tr>
                            <tr>
                              <td><em class="ion-ios-telephone icon-fw mr"></em>Contact phone</td>
                              <td><span class="ng-scope ng-binding editable">13-123-46578</span></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="card-divider"></div>
                    </form>
                  </div>
                  <!-- Right column-->
                  <div class="col-md-5 col-lg-4">
                    <div class="card">
                      <h5 class="card-heading">
                          Contacts
                      </h5>
                      <div class="mda-list">
                        <div class="mda-list-item"><img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="List user" class="mda-list-item-img">
                          <div class="mda-list-item-text mda-2-line">
                            <h3><a href="#">Eric Graves</a></h3>
                            <div class="text-muted text-ellipsis">Ut ac nisi id mauris</div>
                          </div>
                        </div>
                        <div class="mda-list-item"><img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="List user" class="mda-list-item-img">
                          <div class="mda-list-item-text mda-2-line">
                            <h3><a href="#">Jessie Cox</a></h3>
                            <div class="text-muted text-ellipsis">Sed lacus nisl luctus</div>
                          </div>
                        </div>
                        <div class="mda-list-item"><img src="http://bootdey.com/img/Content/avatar/avatar3.png" alt="List user" class="mda-list-item-img">
                          <div class="mda-list-item-text mda-2-line">
                            <h3><a href="#">Marie Hall</a></h3>
                            <div class="text-muted text-ellipsis">Donec congue sagittis mi</div>
                          </div>
                        </div>
                        <div class="mda-list-item"><img src="http://bootdey.com/img/Content/avatar/avatar4.png" alt="List user" class="mda-list-item-img">
                          <div class="mda-list-item-text mda-2-line">
                            <h3><a href="#">Guy Carpenter</a></h3>
                            <div class="text-muted text-ellipsis">Donec convallis arcu sit</div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pv0 text-right"><a href="" class="btn btn-flat btn-info">View all</a></div>
                      <div class="card-divider"></div>
                      <h5 class="card-heading">Activity</h5>
                      <div class="card-body pb0">
                        <p class="pull-left mr"><em class="ion-record text-info"></em></p>
                        <div class="oh">
                          <p><strong class="mr-sm">Added</strong><span class="mr-sm">a new issue</span><a href="">#5478</a></p>
                          <div class="clearfix">
                            <div class="pull-left text-muted"><em class="ion-android-time mr-sm"></em><span>an hour ago</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pb0">
                        <p class="pull-left mr"><em class="ion-record text-danger"></em></p>
                        <div class="oh">
                          <p><strong class="mr-sm">Commented</strong><span class="mr-sm"> on the project</span><a href="">Material</a></p>
                          <p class="bl pl"><i>That's awesome!</i></p>
                          <div class="clearfix">
                            <div class="pull-left text-muted"><em class="ion-android-time mr-sm"></em><span>2 hours ago</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pb0">
                        <p class="pull-left mr"><em class="ion-record text-success"></em></p>
                        <div class="oh">
                          <p><strong class="mr-sm">Completed</strong><span> all tasks asigned this week</span></p>
                          <div class="clearfix">
                            <div class="pull-left text-muted"><em class="ion-android-time mr-sm"></em><span>3 hours ago</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body pb0">
                        <p class="pull-left mr"><em class="ion-record text-info"></em></p>
                        <div class="oh">
                          <p><strong class="mr-sm">Published</strong><span class="mr-sm"> new photos on the album</span><a href="">WorldTrip</a></p>
                          <p><a href=""><img src="http://lorempixel.com/200/200/nature/1" alt="Pic" class="mr-sm thumb48"></a>
                          <a href=""><img src="http://lorempixel.com/200/200/nature/2" alt="Pic" class="mr-sm thumb48"></a>
                          <a href=""><img src="http://lorempixel.com/200/200/nature/3" alt="Pic" class="mr-sm thumb48"></a></p>
                          <div class="clearfix">
                            <div class="pull-left text-muted"><em class="ion-android-time mr-sm"></em><span>4 hours ago</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="clearfix">
                          <p class="pull-left mr"><em class="ion-record text-primary"></em></p>
                          <div class="oh">
                            <p><strong class="mr-sm">Following</strong><span class="mr-sm">Jane Kuhn</span></p>
                            <p><span class="image-list"><a href=""><img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="User" class="img-circle thumb32"></a>
                            <a href=""><img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="User" class="img-circle thumb32"></a>
                            <a href=""><img src="http://bootdey.com/img/Content/avatar/avatar3.png" alt="User" class="img-circle thumb32"></a>
                            <a href=""><img src="http://bootdey.com/img/Content/avatar/avatar4.png" alt="User" class="img-circle thumb32"></a>
                            <a href=""><img src="http://bootdey.com/img/Content/avatar/avatar5.png" alt="User" class="img-circle thumb32"></a><strong><a href="" class="ml-sm link-unstyled">+200</a></strong></span></p>
                            <div class="clearfix">
                              <div class="pull-left text-muted"><em class="ion-android-time mr-sm"></em><span>yesterday</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>  
      </div><!-- div container -->

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
   </body>
</html>