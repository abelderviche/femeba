<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?php echo HTTP_CSS_PATH; ?>favicon.png">
    <title>Femeba</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo HTTP_CSS_PATH; ?>materialize.css" rel="stylesheet">
    <link href="<?php echo HTTP_CSS_PATH; ?>style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo HTTP_JS_PATH; ?>html5shiv.js"></script>
      <script src="<?php echo HTTP_JS_PATH; ?>respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    <?php
    $pg = isset($page) && $page != '' ?  $page :'home'  ;    
   // echo $pg;
    ?>
            <!--<li <?php echo  $pg =='home' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>">Home</a></li>
            <li <?php echo  $pg =='about' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>aboutus">About</a></li>
            <li <?php echo  $pg =='contact' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>contactus">Contact</a></li>
             <li <?php echo  $pg =='signup' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>signup">SignUp</a></li>
-->

    <div class="navbar-fixed">
  
  <nav class="blue darken-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="<?php echo base_url(); ?>" class="brand-logo"><img class="responsive-img" style="height:56px;margin-top:1px;" src="<?=HTTP_IMAGES_PATH;?>logo.png" alt="logo"></a>
      <ul class="right hide-on-med-and-down ">
        <li <?php echo  $pg =='home' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>" class="white-text">Inicio</a></li>
        <li <?php echo  $pg =='novedades' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>novedades" class="white-text">Novedades</a></li>
        <li <?php echo  $pg =='planes' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>planes" class="white-text">Planes</a></li>
        <li <?php echo  $pg =='info' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>info" class="white-text">Informacion para el socio</a></li>
        <li <?php echo  $pg =='solicite' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>solicite" class="white-text">Solicite Asesor</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li   <?php echo  $pg =='home' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>">Inicio</a></li>
        <li   <?php echo  $pg =='novedades' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>novedades">Novedades</a></li>
        <li <?php echo  $pg =='planes' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>planes">Planes</a></li>
        <li <?php echo  $pg =='info' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>info">Informacion para el socio</a></li>
        <li <?php echo  $pg =='solicite' ? 'class="active"' : '' ?>><a href="<?php echo base_url(); ?>solicite" >Solicite Asesor</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse "><i class="material-icons white-text">menu</i></a>
    </div>
  </nav>
</div>
