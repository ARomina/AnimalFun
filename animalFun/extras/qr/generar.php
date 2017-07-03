<?php    
/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
   include_once "../../conexion.php";


    
	  if(isset($_SESSION['usuario'])){
      $usuario = $_SESSION['usuario'];
      $id = $_SESSION['id'];
  }

  //Inicializo variables
  $idMascota = "";
  $nombre = "";
  $foto = "";

  //Query
  $sql = "SELECT id, nombre, foto FROM mascota WHERE usuario = ?";

  
  
  
   
    echo "<h1>Solo elegi la mascota y generalo! </h1><hr/>";
    
    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


    if (isset($_REQUEST['data'])) { 
    
        //it's very important!
        if (trim($_REQUEST['data']) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($_REQUEST['data'].'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($_REQUEST['data'], $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a>';    
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
        
    //display generated file
    echo '<div class="row"><div class="col col-md-6"><img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/></div>';  
    
    //config form
    echo '<div class="col col-md-6"><form action="generarQR.php" method="post">
		Elegi tu mascota';
		
      //Preparo la query
	if($stmt = $con->prepare($sql)){

            //Seteo parámetros
            $stmt->bind_param('s', $id);
            $stmt->bind_result($idMascota, $nombre, $foto);
            $stmt->execute();
            $stmt->store_result();
          
            if(($stmt->num_rows) > 0){
 echo'<select name="data">';
              while($stmt->fetch()){
                echo '  
                        
                         <option value="http://animalfun.fun/animalFun/vistas/usuarios/verPerfilMascota.php?idMascota='.$idMascota.'"> '.$nombre.' ID- '.$idMascota.' </option>
                       
                     ';
              }
            }
			echo '	</select>';
  }
					
					
	/* 				'
		<hr>
		
	   Complejidad del codigo:&nbsp;<select name="level">
		
            <option value="L"'.(($errorCorrectionLevel=='L')?' selected':'').'>Chico</option>
            <option value="M"'.(($errorCorrectionLevel=='M')?' selected':'').'>Mediano</option>
            <option value="Q"'.(($errorCorrectionLevel=='Q')?' selected':'').'>Grande</option>
            <option value="H"'.(($errorCorrectionLevel=='H')?' selected':'').'>Maximo</option>
        </select>
		<hr>
        Tamaño:&nbsp;<select name="size">';
        
    for($i=1;$i<=10;$i++)
        echo '<option value="'.$i.'"'.(($matrixPointSize==$i)?' selected':'').'>'.$i.'</option><hr/>'; */
        
    echo '</select>&nbsp;
       <div class="pull-right"> <input  class="btn btn-success"type="submit" value="Generar QR">&nbsp;&nbsp;</div></form><a href="output.php?t=pdf" target="_blank"><input  class="btn btn-danger"type="submit" value="Exportar a PDF"></a></hr></div></div>';
        

		
		
		
		
		
		
		
		
		
		
		
	