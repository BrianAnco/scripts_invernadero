<?php
define('HOST','localhost');
define('USER','id17752076_dbuser');
define('PASS','cw?B6Iuxw*VV&2<Y');
define('DB','id17752076_dbname');
$con = mysqli_connect(HOST,USER,PASS,DB);
$sql = "SELECT temperatura, humedad_aire, humedad_tierra, fecha_hora FROM `invernadero`;
$res = mysqli_query($con,$sql);
$jsonData = array();
while ($array = mysqli_fetch_array($res)) {
$row_array['temperatura'] = $array['temperatura'];
$row_array['humedad_aire'] = $array['humedad_aire'];
$row_array['humedad_tierra'] = $array['humedad_tierra'];
array_push($jsonData,$row_array);
}
echo json_encode($jsonData);
mysqli_close($con);
?>