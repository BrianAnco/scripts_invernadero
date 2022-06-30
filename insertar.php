<?php
define('HOST','us-cdbr-east-06.cleardb.net');
define('USER','bb7b3ac1261bca');
define('PASS','16234d12');
define('DB','heroku_e5362bc152d88fb');
$con = mysqli_connect(HOST,USER,PASS,DB);
if ($con->connect_errno) {
echo 'Error al conectar base de datos: ', $con->connect_error;
exit();
}
$temperatura = htmlspecialchars($_GET['temperatura']);
$humedad_aire = htmlspecialchars($_GET['humedad_aire']);
$humedad_tierra = htmlspecialchars($_GET['humedad_tierra']);
date_default_timezone_set('America/Lima');
$fecha_hora = strval(date('m-d-Y h:i:s a', time()));

$sql = $con->prepare('INSERT INTO invernadero (temperatura,humedad_aire, humedad_tierra, fecha_hora) VALUES
(?, ?, ?,?)');
$sql->bind_param('ssss', $temperatura, $humedad_aire,$humedad_tierra, $fecha_hora);
$sql->execute();
echo 'OK\n';
echo $temperatura;
echo $humedad_aire;
echo $humedad_tierra;
echo $fecha_hora;
;
$con->close();
?>