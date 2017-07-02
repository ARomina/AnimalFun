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

          #blog-section{margin-top:40px;margin-bottom:80px;}
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

    <section id="blog-section" >
     <div class="container">
       <div class="row">
         <div class="col-lg-8">
           <div class="row">
		    <div class="col-lg-12 col-md-12">
             <aside>
               <div class="content-title">
				<div class="form-group">
				<div class="content-footer">
				<img class="user-small-img" src="http://cache.ppomppu.co.kr/zboard/data3/2016/0831/900w_1472593942_GRTpXtlIDs.jpg">
				<span style="font-size: 16px;color: #fff;">Escribe tu comentario..</span>
					<span class="pull-right">
					<div class="form-group pull-right">
						  <select class="form-control" id="sel1">
							<option>Mascota 1</option>
							<option>Mascota 2</option>
							<option>Mascota 3</option>
							<option>Mascota 4</option>
						  </select>
					</div>
					</span>
                    </br></br>
				
				</div>
					  <textarea class="form-control" rows="5" id="comment"></textarea>
					  <span class="pull-right"><button type="button" class="btn btn-success">Success</button></span>
					</div>
					</br></br>
				</div>
				
             </aside>
            </div>       
              <div class="col-lg-12 col-md-12">
             <aside>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuJGS4RrnjHo4ElzZtiV2mg7SxvXk89FQT5QpUmwsknqll1YD8" class="img-responsive center-block">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget arcu ut nunc dignissim convallis et eget libero. Integer vulputate, eros commodo pulvinar ornare, nisl nulla iaculis augue, </a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://www.fotonostra.com/fotografia/fotos/fotografiarpaisajes.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-commenting" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                    </div>
				</div>
             </aside>
            </div>
               
               <div class="col-lg-12 col-md-12">
             <aside>
               <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Quisque at tristique neque. Vivamus rutrum posuere risus, id mattis elit volutpat quis. Duis a est id odio faucibus mattis quis nec tortor. Orci varius natoque penatibus et magnis dis parturient montes, </a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="http://cache.ppomppu.co.kr/zboard/data3/2016/0831/900w_1472593942_GRTpXtlIDs.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-commenting" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive center-block"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                       
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-12 col-md-12">
             <aside>
                <img src="http://www.fotonostra.com/fotografia/fotos/fotografiarpaisajes.jpg" class="img-responsive center-block">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">In dignissim leo eu scelerisque mollis. Aliquam sed purus non augue gravida aliquet et id felis. Sed dui massa, imperdiet a turpis at, molestie hendrerit magna. </a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-commenting" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                       
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-12 col-md-12">
             <aside>
               <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Phasellus leo urna, egestas eu facilisis non, posuere et nulla. Proin vestibulum, nulla ornare gravida auctor, augue risus viverra neque, quis eleifend </a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-commenting" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                      
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-12 col-md-12">
             <aside>
                <img src="" class="img-responsive">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Sed ante ligula, lobortis id hendrerit at, scelerisque sed dolor. In feugiat volutpat lobortis. Fusce quis libero vehicula, tempor purus vel, sodales quam. Nunc vestibulum sodales</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-commenting" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                      
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-12 col-md-12">
             <aside>
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Nunc id leo pulvinar, auctor justo sed, imperdiet nisi. Praesent purus nulla, convallis sodales ligula vel, fringilla ullamcorper dui. Suspendisse tempor pretium massa id tincidunt. Praesent quis urna non sapien porta maximus.</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-commenting" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                      
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-12 col-md-12">
             <aside>
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">attis est mattis vitae. Cras placerat suscipit orci vitae maximus. Curabitur scelerisque mauris id est conva</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-commenting" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                       
                    </div>
				</div>
             </aside>
            </div>       
               
               <div class="col-lg-12 col-md-12">
             <aside>
                <img src="https://k38.kn3.net/taringa/2/4/3/0/6/6/13/soyluuchoox/A1D.jpg?1843" class="img-responsive class-block">
                <div class="content-title">
				<div class="text-center">
				<h3><a href="#">Niki Postingan Sing Kepisan Njeh, Perdana Ngoten</a></h3>
				</div>
				</div>
				<div class="content-footer">
				<img class="user-small-img" src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg">
				<span style="font-size: 16px;color: #fff;">Sumit Kumar</span>
				<span class="pull-right">
				<a href="#" data-toggle="tooltip" data-placement="left" title="Comments"><i class="fa fa-commenting" ></i> 30</a>
				<a href="#" data-toggle="tooltip" data-placement="right" title="Loved"><i class="fa fa-thumbs-o-up"></i> 20</a>                  
				</span>
                    <div class="user-ditels">
                    <div class="user-img"><img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADtA/hio87ZnTpakcchDXNrKc_wlkHEcpH6vMwCJoC/w140-h148-p-rw/profile-pic.jpg" class="img-responsive"></div>
                        <span class="user-full-ditels">
                        <h3>Sumit Kumar</h3>
                        <p>Web & Graphics Disigner</p>
                        </span>
                     
                    </div>
				</div>
             </aside>
            </div>  
           </div>
          </div>
           
<!-- // RECENT POST===========-->
         <div class="col-lg-4">           
               <div class="widget-sidebar">
                 <h2 class="title-widget-sidebar">Ultimos encuentros</h2>
                   <div class="content-widget-sidebar">
                    <ul>
                     <li class="recent-post">
                        <div class="post-img">
                        </div>
                         <a href="#"><h5>mascota1 estuvo con mascota2</h5></a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                        </li>
                        <hr>
                        
                        <li class="recent-post">
                        <div class="post-img">
                         </div>
                         <a href="#"><h5>mascota3 tuvo cachorros</h5></a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                        </li>
                        <hr>
                        
                        <li class="recent-post">
                        <div class="post-img">
                         </div>
                         <a href="#"><h5>mascota4 fue adoptado por usuario1</h5></a>
                         <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                        </li>
                         
					
                    </ul>
                   </div>
                 </div>
             
             <div class="widget-sidebar">
              <h2 class="title-widget-sidebar">Rankigs</h2>
                <div class="last-post">
                  <button class="accordion">General</button>
                   <div class="panel">
                     <li class="recent-post">
                      <div class="post-img">
                       <img src="https://lh3.googleusercontent.com/-13DR8P0-AN4/WM1ZIz1lRNI/AAAAAAAADeo/XMfJ7CM-pQg9qfRuCgSnphzqhaj3SQg6QCJoC/w424-h318-n-rw/thumbnail4.jpg" class="img-responsive">
                        </div>
                       <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                      <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                    </li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                 </div>
                </div>                 
                 <hr>
                 <div class="last-post">
                  <button class="accordion">Mensual</button>
                   <div class="panel">
                     <li class="recent-post">
                      <div class="post-img">
                       <img src="https://lh3.googleusercontent.com/-QlnwuVgbxus/WM1ZI1FKQiI/AAAAAAAADeo/nGSd1ExnnfIfIBF27xs8-EdBdfglqFPZgCJoC/w424-h318-n-rw/thumbnail2.jpg" class="img-responsive">
                        </div>
                       <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                      <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                    </li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                 </div>
                </div>
                 <hr>
                 <div class="last-post">
                  <button class="accordion">Semanal</button>
                   <div class="panel">
                     <li class="recent-post">
                      <div class="post-img">
                       <img src="https://lh3.googleusercontent.com/-wRHL_FOH1AU/WM1ZIxQZ3DI/AAAAAAAADeo/lwJr8xndbW4MHI-lOB7CQ-14FJB5f5SWACJoC/w424-h318-n-rw/thumbnail5.jpg" class="img-responsive">
                        </div>
                       <a href="#"><h5>Excepteur sint occaecat cupi non proident laborum.</h5></a>
                      <p><small><i class="fa fa-calendar" data-original-title="" title=""></i> 30 Juni 2014</small></p>
                    </li>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                 </div>
                </div>
                 <hr>
                 
             </div>
             
        <!--=====================
               CATEGORIES
          ======================-->
             <div class="widget-sidebar">
              <h2 class="title-widget-sidebar">// CATEGORIES</h2>
                 <button class="categories-btn">Audio</button>
                 <button class="categories-btn">Blog</button>
                 <button class="categories-btn">Gallery</button>
                 <button class="categories-btn">Images</button>
             </div>  
                 
             </div>
			
           </div>
		   </br></br>
		    <div class="col col-md-4 col-md-offset-2">
			 <div class="last-post">
                  <button class="accordion">Ver mas </button>
                   
                </div>
			</div>	
         </div>
     
    </section>

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

<!--     <script type="text/javascript" src="../../recursos/js/jquery-3.1.1.js"></script> -->
    <script type="text/javascript" src="../../recursos/js/jquery-3.2.0.js"></script>
    <script type="text/javascript" src="../../recursos/js/bootstrap.js"></script>
    <script type="text/javascript" src="../../recursos/js/carousel.js"></script>
  
  <script>
         $(document).ready(function(){
         $('[data-toggle="tooltip"]').tooltip(); 
         });

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