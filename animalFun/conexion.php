<?php 

// datos para la coneccion a mysql 
/*define('DB_SERVER','localhost'); 
define('DB_NAME','animalfun'); 
define('DB_USER','root'); 
define('DB_PASS',''); 
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS, DB_NAME); */

	//Cargo el archivo de configuracion y lo meto en una variable (como un array)
	$config = parse_ini_file('config.ini'); 

	//Conecto a la base y creo la variable
	$con = mysqli_connect($config['DB_SERVER'],$config['DB_USER'],$config['DB_PASS'],$config['DB_NAME']);

	//Si la conexión no es exitosa, error
	if($con === false){
	    echo "Error al conectar a la base de datos";
	}

?>