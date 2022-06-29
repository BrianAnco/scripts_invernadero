<?php
$con = new mysqli('localhost', 'id17752076_dbuser', 'cw?B6Iuxw*VV&2<Y', 'id17752076_dbname');
if ($con->connect_errno) {
echo 'Error al conectar base de datos: ', $con->connect_error;
exit();
}
$temperatura = htmlspecialchars($_GET['temperatura']);
$humedad_aire = htmlspecialchars($_GET['humedad_aire']);
$humedad_tierra = htmlspecialchars($_GET['humedad_tierra']);
$fecha_hora = htmlspecialchars($_GET['fecha_hora']);
$sql = $con->prepare('INSERT INTO invernadero ( temperatura,humedad_aire, humedad_tierra, fecha_hora) VALUES
(?, ?, ?,?)');
$sql->bind_param('ssiss', $temperatura, $humedad_aire,$humedad_tierra, $fecha_hora);
$sql->execute();
echo 'OK\n';
;
$con->close();
?>