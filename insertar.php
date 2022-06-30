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
$porcentaje_agua = htmlspecialchars($_GET['porcentaje_agua']);
date_default_timezone_set('America/Lima');
$fecha_hora = strval(date('m-d-Y h:i:s a', time()));

$sql = $con->prepare('INSERT INTO invernadero (temperatura,humedad_aire, humedad_tierra, fecha_hora, porcentaje_agua) VALUES
(?, ?, ?,?,?)');
$sql->bind_param('sssss', $temperatura, $humedad_aire,$humedad_tierra, $fecha_hora, $porcentaje_agua);
$sql->execute();
echo 'OK\n';
echo "Temperatura: ";
echo $temperatura;
echo "- Humedad del Aire: ";
echo $humedad_aire;
echo "- Humedad de la Tierra: ";
echo $humedad_tierra;
echo "- Fecha/Hora: ";
echo $fecha_hora;
echo "- Porcentaje de Agua: ";
echo $porcentaje_agua
;
$con->close();
?>