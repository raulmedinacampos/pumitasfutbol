<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Hojas de estilo -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/template.css">

<!-- Scripts -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
<![endif]-->

<!-- Twitter -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<!-- Fin Twitter -->

<!-- Google Maps -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&signed_in=false&language=es"></script>
<script type="text/javascript" src="js/ubicacion.js"></script>
<!-- Fin Google Maps -->

<title>Pumitas Futbol</title>
</head>

<body>

<!-- Header -->
<header class="container"> 
  <!-- Imagen de fondo --> 
  <img src="images/navbar-bg.jpg" class="img-responsive" alt="bg-header" /> 
  
  <!-- Imagen logo -->
  <div class="logo-header"> <img src="images/pumitas-logo-navbar.png" alt="Logo Pumitas" /> </div>
  <!-- Fin logo --> 
  
  <!-- Menú -->
  <nav class="navbar navbar-default"> 
    
    <!-- Contenedor menú -->
    <div class="container-fluid"> 
      
      <!-- Ícono para desplegar el menú en resoluciones pequeñas -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      
      <!-- Elementos del menú -->
      <?php
	  $request = Flight::request();
	  ?>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li <?php echo ($request->url == '/') ? 'class="active"' : ''; ?>><a href="/">Home <span class="sr-only">(current)</span></a></li>
          <li <?php echo ($request->url == '/calendario') ? 'class="active"' : ''; ?>><a href="/calendario">Calendario</a></li>
          <li <?php echo ($request->url == '/inscripciones') ? 'class="active"' : ''; ?>><a href="/inscripciones">Inscripciones</a></li>
          <li <?php echo ($request->url == '/noticias') ? 'class="active"' : ''; ?>><a href="/noticias">Noticias</a></li>
        </ul>
      </div>
      <!-- Fin elementos del menú --> 
    </div>
    <!-- Fin contenedor menú --> 
  </nav>
  <!-- Fin menú --> 
</header>
<!-- Fin header --> 
