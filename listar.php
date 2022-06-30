<?php
define('HOST','us-cdbr-east-06.cleardb.net');
define('USER','bb7b3ac1261bca');
define('PASS','16234d12');
define('DB','heroku_e5362bc152d88fb');
$con = mysqli_connect(HOST,USER,PASS,DB);
$sql = "SELECT temperatura, humedad_aire, humedad_tierra, fecha_hora FROM `invernadero`";
$res = mysqli_query($con,$sql);
$jsonData = array();
while ($array = mysqli_fetch_array($res)) {
$row_array['temperatura'] = $array['temperatura'];
$row_array['humedad_aire'] = $array['humedad_aire'];
$row_array['humedad_tierra'] = $array['humedad_tierra'];
$row_array['fecha_hora'] = $array['fecha_hora'];
array_push($jsonData,$row_array);
}
echo json_encode($jsonData);
echo "Hola Listar";
mysqli_close($con);
?>