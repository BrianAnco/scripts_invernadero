<?php
define('HOST','us-cdbr-east-06.cleardb.net');
define('USER','bb7b3ac1261bca');
define('PASS','16234d12');
define('DB','heroku_e5362bc152d88fb');
$con = mysqli_connect(HOST,USER,PASS,DB);
$sql = "SELECT temperatura, humedad_aire, humedad_tierra, fecha_hora, porcentaje_agua FROM `invernadero` ORDER BY Id DESC LIMIT 1";
$res = mysqli_query($con,$sql);
$jsonData = array();
while ($array = mysqli_fetch_array($res)) {
$row_array['temperatura'] = $array['temperatura'];
$temperatura = $row_array['temperatura'];
$row_array['humedad_aire'] = $array['humedad_aire'];
$humedad_aire = $row_array['humedad_aire'];
$row_array['humedad_tierra'] = $array['humedad_tierra'];
$humedad_tierra = $row_array['humedad_tierra'];
$row_array['fecha_hora'] = $array['fecha_hora'];
$fecha_hora = $array['fecha_hora'];
$row_array['porcentaje_agua'] = $array['porcentaje_agua'];
$porcentaje_agua = $array['porcentaje_agua'];
array_push($jsonData,$row_array);
}
mysqli_close($con);
?>

<!DOCTYPE html>
<!--
Template Name: Chillaid
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Chillaid</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->

<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <h3 class="heading">Control de Invernadero</h3>
      <footer><a class="btn" href="#">Actualizar Datos</a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>

<!-- ################################################################################################ -->
<div class="wrapper row3 center">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      
      <h6 class="heading font-x2">Última medición: </h6>
      <p class="nospace font-xs"><?php echo $fecha_hora ?></p>
    </div>
    <ul class="pr-charts nospace group center">
      <li class="pr-chart-ctrl" data-animate="false">
        <div class="pr-chart" data-percent="<?php echo $humedad_aire?>"><i></i></div>
        <p>Humedad en Aire</p>
      </li>
      <li class="pr-chart-ctrl" data-animate="false">
        <div class="pr-chart" data-percent="<?php echo $humedad_tierra?>"><i></i></div>
        <p>Humedad en Tierra</p>
      </li>
      <li class="pr-chart-ctrl" data-animate="false">
        <div class="pr-chart" data-percent="<?php echo $porcentaje_agua?>"><i></i></div>
        <p>Nivel de Agua</p>
      </li>
      <li class="one_quarter">
          <article><a href="#"></a>
            <h6 class="heading"><?php echo $temperatura ?> °C</h6>
            <p>Temperatura</p>
          </article>
        </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- Homepage specific -->
<script src="layout/scripts/jquery.easypiechart.min.js"></script>
<!-- / Homepage specific -->
</body>
</html>