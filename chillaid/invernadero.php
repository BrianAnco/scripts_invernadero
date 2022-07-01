<?php
    $var1 = 70;
    $var2 = "90";
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section id="introblocks">
      <ul class="nospace group btmspace-80 elements elements-four">
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-hand-rock"></i></a>
            <h6 class="heading">Feugiat fermentum</h6>
            <p>Ac orci proin porttitor lacus eget mi pellentesque non.</p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-dove"></i></a>
            <h6 class="heading">Malesuada accumsan</h6>
            <p>Sapien sed metus congue sodales vivamus scelerisque.</p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-history"></i></a>
            <h6 class="heading">Mauris placerat</h6>
            <p>Et interdum vulputate purus nisl fringilla sapien quis.</p>
          </article>
        </li>
        <li class="one_quarter">
          <article><a href="#"><i class="fas fa-heartbeat"></i></a>
            <h6 class="heading">Elementum rhoncus</h6>
            <p>Sollicitudin dui mauris dui nunc lorem tortor pharetra.</p>
          </article>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Rutrum erat nec mollis augue mauris</p>
      <h6 class="heading font-x2">Ac pede phasellus commodo</h6>
    </div>
    <ul class="pr-charts nospace group center">
      <li class="pr-chart-ctrl" data-animate="false">
        <div class="pr-chart" data-percent="<?php echo $var1 ?>"><i></i></div>
        <p>Porttitor</p>
      </li>
      <li class="pr-chart-ctrl" data-animate="false">
        <div class="pr-chart" data-percent=<?php echo $var1 ?>><i></i></div>
        <p>Condimentum</p>
      </li>
      <li class="pr-chart-ctrl" data-animate="false">
        <div class="pr-chart" data-percent="<?php echo $var2 ?>"><i></i></div>
        <p>Sollicitudin</p>
      </li>
      <li class="pr-chart-ctrl" data-animate="false">
        <div class="pr-chart" data-percent=<?php echo $var2 ?>><i></i></div>
        <p>Venenatis</p>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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