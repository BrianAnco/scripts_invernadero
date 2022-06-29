<?php
$con = new mysqli('localhost', 'id17752076_dbuser', 'cw?B6Iuxw*VV&2<Y', 'id17752076_dbname');
if ($con->connect_errno) {
echo 'Error al conectar base de datos: ', $con->connect_error;
exit();
}
$aux = htmlspecialchars($_GET['aux']);
$temperatura = htmlspecialchars($_GET['temperatura']);
$humedad_aire = htmlspecialchars($_GET['humedad_aire']);
$humedad_tierra = htmlspecialchars($_GET['humedad_tierra']);
date_default_timezone_set('America/Lima');
$fecha_hora = strval(date('m-d-Y h:i:s a', time()));

$sql = $con->prepare('INSERT INTO invernadero ( temperatura,humedad_aire, humedad_tierra, fecha_hora) VALUES
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