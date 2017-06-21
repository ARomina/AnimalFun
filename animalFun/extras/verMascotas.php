<?php
	
	include_once "../conexion.php";

	session_start();

	if(isset($_SESSION['usuario'])){
    	$usuario = $_SESSION['usuario'];
    	$id = $_SESSION['id'];
	}

	$sql = "";

	


	<div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Alby" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350gato_ocicat.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Albus" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350perro.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Dumbledore" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350gatopersa3.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Newt" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350diamante3.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Thomas" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350gatobirmania.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Minho" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350canariopeludito.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Draco" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350perro04.jpg">
                  </a>
                </div>
                <div class="col-lg-3 col-sm-4 col-xs-6">
                  <a title="Scorpius" href="#">
                    <img class="thumbnail img-responsive" src="img/mascotas/600x350perrojugando.jpg">
                  </a>
                </div>

?>