
<?php
// Conectamos base de datos
$conexion = mysql_connect('localhost', 'root', '')
or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('animalfun') or die('No se pudo seleccionar la base de datos');
 
//preparamos la consulta
$SQLDatos = "SELECT tipo.descripcion,COUNT(*) AS cantidad FROM valoracion JOIN post ON valoracion.post=post.id JOIN mascota ON post.mascota=mascota.id JOIN tipo ON mascota.tipo=tipo.id GROUP BY tipo.descripcion";
 
//ejecutamos la consulta
$result = mysql_query($SQLDatos);
//obtenemos número filas
$numFilas = mysql_num_rows($result);
 
//cargamos array con los nombres de las métricas a visualizar
$datos[0] = array('cantidad','tipo.descripcion');
 
//recorremos filas
for ($i=1; $i<($numFilas+1); $i++)
{
    $datos[$i] = array(mysql_result($result, $i-1, "tipo.descripcion"),
    (int) mysql_result($result, $i-1, "cantidad"));
}
 
mysql_close($conexion);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" > </script>
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
google.setOnLoadCallback(drawChart);
 
function drawChart() {
 
//cargamos nuestro array $datos creado en PHP para que se puede utilizar en JavaScript
var cargaDatos = <?php echo json_encode($datos); ?>;
 
var datosFinales = google.visualization.arrayToDataTable(cargaDatos);
 
var options = {

          legend: 'none',
          pieSliceText: 'label',
          slices: {  4: {offset: 0.2},
                    12: {offset: 0.3},
                    14: {offset: 0.4},
                    15: {offset: 0.5},
          },
      };
 
var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
 
chart.draw(datosFinales, options);
}
 
</script>
</head>
<body>
<div class="col col-md-4">
<div id="donutchart2" style="width: 370px; height: 370px"></div>
</div>
</body>
</html>