<link type="text/css" rel="stylesheet" href="../css/interiores.css" />

<div class="container" id="contenido">
  <div class="col-sm-10 col-sm-offset-1">
    <h1 class="titulo">Noticias</h1>
    <?php
	for ( $i=0; $i<3; $i++ ) {
	?>
    <div class="row noticia-resumen">
      <div class="col-sm-6"><a href="/noticia"><img src="../images/noticia_thumbnail.jpg" width="400" height="249" alt=""/></a></div>
      <div class="col-sm-6">
        <h4 class="text-uppercase dorado"><strong>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</strong></h4>
        <p class="noticia-fecha">01/01/2016</p>
        <p>Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
      </div>
    </div>
    <?php
	}
	?>
  </div>
</div>
