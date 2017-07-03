<?php



			
			
			
// Conectamos base de datos
$conexion = mysql_connect('localhost', 'root', '')
or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('animalfun') or die('No se pudo seleccionar la base de datos');
 
//preparamos la consulta
$SQLDatos = "SELECT M.nombre,(SELECT COUNT(*)
					  FROM valoracion v1
					  JOIN post p1 ON v1.post=p1.id
					  WHERE p1.mascota=M.id)*10+
					 (SELECT COUNT(*)
					  FROM visita
					  WHERE mascota=M.id)+
					 (SELECT COUNT(*)
					  FROM seguimiento
					  WHERE mascota=M.id
					 )*50 AS puntaje
			FROM mascota M
            	ORDER BY puntaje DESC
				LIMIT 10
            ";


 
//ejecutamos la consulta
$result = mysql_query($SQLDatos);
//obtenemos número filas
$numFilas = mysql_num_rows($result);
 
//cargamos array con los nombres de las métricas a visualizar
$datos[0] = array('','mascota.nombre');
 
//recorremos filas
for ($i=1; $i<($numFilas+1); $i++)
{
    $datos[$i] = array(mysql_result($result, $i-1, "M.nombre"),
    (int) mysql_result($result, $i-1, "puntaje"));
}
 
mysql_close($conexion);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" > </script>


 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- Load the AJAX API -->
<script type="text/javascript" src="https://www.google.com/jsapi" > </script>
<script type="text/javascript"
src="https://www.google.com/jsapi?autoload={
'modules':[{
'name':'visualization',
'version':'1',
'packages':['corechart']
}]
}"></script>
 
<script type="text/javascript">
google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);
function drawStuff(){
 
//cargamos nuestro array $datos creado en PHP para que se puede utilizar en JavaScript
var cargaDatos = <?php echo json_encode($datos); ?>;
 
var datosFinales = google.visualization.arrayToDataTable(cargaDatos);
 
 var options = {
        
          width: 300,
          legend: { position: 'none' },
          
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: ''} // Top x-axis.
            }
          },
          bar: { groupWidth: "50%" }
        };
 
  var chart = new google.charts.Bar(document.getElementById('top_x_div'));
 
chart.draw(datosFinales, options);
}
 
</script>

</head>
<body>
<div class="col col-md-4">

<div id="top_x_div" style="width: 10px; height: 400px"></div>
</div>
</body>
</html>