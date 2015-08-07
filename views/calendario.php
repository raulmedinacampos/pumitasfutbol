
<link type="text/css" rel="stylesheet" href="../css/interiores.css" />
<script type="text/javascript" src="js/calendario.js"></script>
<?php

$useragent=$_SERVER['HTTP_USER_AGENT'];
$isiPad = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'iPad');


if($isiPad||preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))):


?>
<div class="section-title">Calendarios</div>
    <div class="separator">----</div>
    <div id="menu-categ" class="menu-select">
      <div class="bloque-select dorada" onclick="setCat(0,this)">
        categoría 4-5
      </div>
      <div class="bloque-select blanca" onclick="setCat(1,this)">
        categoría 6-7
      </div>
      <div class="bloque-select dorada" onclick="setCat(2,this)">
        categoría 8-9
      </div>
      <div class="bloque-select blanca" onclick="setCat(3,this)">
        categoría 10-11
      </div>
      <div class="bloque-select dorada" onclick="setCat(4,this)">
        categoría 12-13
      </div>
      <div class="bloque-select blanca" onclick="setCat(5,this)">
        categoría 14 (dominical)
      </div>
      <div class="bloque-select dorada" onclick="setCat(6,this)">
        categoría 14 (sabatino)
      </div>
      <div class="bloque-select blanca" onclick="setCat(7,this)">
        categoría femenil
      </div>
    </div>
    <div id="menu-fecha" class="menu-select">
      <div class="cat-selected-title"></div>
      <div class="bloque-select blanca" onclick="setDate(0,this)">
        agosto 1
      </div>
      <div class="bloque-select blanca" onclick="setDate(1,this)">
        agosto 8
      </div>
      <div class="bloque-select blanca" onclick="setDate(2,this)">
        agosto 15
      </div>
      <div class="bloque-select blanca" onclick="setDate(3,this)">
        agosto 22
      </div>
      <div class="bloque-select blanca" onclick="setDate(4,this)">
        agosto 29
      </div>
      <div class="bloque-select blanca" onclick="setDate(5,this)">
        septiembre 5
      </div>
    </div>
    <div id="tabla-juegos" class="menu-select">
      <div class="cat-selected-title"></div>
        <div class="separator">----</div>
      <div id="fecha-juegos">juegos del día </div>
      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">8:00</div>
          <div>Campo 11</div>
        </div>
        <div class="calen-item equipos">
          <div>Leones</div>
          <div>Gatos</div>
        </div>

      </div>
      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">8:00</div>
          <div>Campo 10</div>
        </div>
        <div class="calen-item equipos">
          <div>Tigres</div>
          <div>Cachorros</div>
        </div>

      </div>
      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">9:00</div>
          <div>Campo 8</div>
        </div>
        <div class="calen-item equipos">
          <div>Coyotes</div>
          <div>Ocelotes</div>
        </div>

      </div>
      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">9:00</div>
          <div>Campo 10</div>
        </div>
        <div class="calen-item equipos">
          <div>Siameses</div>
          <div>Linces</div>
        </div>

      </div>
      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">9:00</div>
          <div>Campo 12</div>
        </div>
        <div class="calen-item equipos">
          <div>Panteras</div>
          <div>Leoncillos</div>
        </div>

      </div>
      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">10:00</div>
          <div>Campo 8</div>
        </div>
        <div class="calen-item equipos">
          <div>Coaties</div>
          <div>Jaguares</div>
        </div>

      </div>

      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">10:00</div>
          <div>Campo 10</div>
        </div>
        <div class="calen-item equipos">
          <div>Lobeznos</div>
          <div>Llobos</div>
        </div>

      </div>

      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">11:00</div>
          <div>Campo 5</div>
        </div>
        <div class="calen-item equipos">
          <div>Guepardos</div>
          <div>Angoras</div>
        </div>

      </div>

      <div class="row-juegos">  
        <div class="calen-item campo-hr">
          <div class="dorado">11:00</div>
          <div>Campo 8</div>
        </div>
        <div class="calen-item equipos">
          <div>Leones</div>
          <div>Gatos</div>
        </div>

      </div>
    </div>


<?php
else:
?>
<div class="container" id="contenido">
  <div class="col-sm-10 col-sm-offset-1">
    <h1 class="titulo">Calendario</h1>
    <div class="calendario row">
      <div class="col-sm-4 categorias">
        <span class="titulo-ligas"><img src="../images/leagues-icon.png" width="100" height="23" alt=""/></span>
		<img alt="" src="../images/arrow-leagues-icon.png" class="indicador" />
        <ul>
          <li><a href="#" data-calendario="1">Categoría 4 - 5</a></li>
          <li><a href="#" data-calendario="2">Categoría 6 - 7</a></li>
          <li><a href="#" data-calendario="3">Categoría 8 - 9</a></li>
          <li><a href="#" data-calendario="4">Categoría 10 - 11</a></li>
          <li><a href="#" data-calendario="5">Categoría 12 - 13</a></li>
          <li><a href="#" data-calendario="6">Categoría 14 (Sabatina)</a></li>
          <li><a href="#" data-calendario="7">Categoría 14 (Dominical)</a></li>
          <li><a href="#" data-calendario="8">Categoría Femenil</a></li>
        </ul>
      </div>
      <div class="col-sm-8 fechas-calendario">
        <img src="../images/bg-calendario.jpg" alt="Fondo calendario" class="fondo"/>
        <div class="header row">
          <div class="col-sm-6"><img src="../images/logotype-footer.png" alt="Logo Pumitas"/></div>
          <div class="col-sm-6">
            <p class="text-uppercase">Calendario de Juegos<br>
              del 30 de mayo al 4 de julio de 2015<br>
              <span class="dorado"><em id="nom-categoria"></em></span></p>
          </div>
        </div>
        <div class="tabla row">
        <table id="tabla-fechas">
		  <thead>
			<tr>
			  <th>Horario de juego</th>
			  <th>Campo</th>
			  <th>Mayo 30</th>
			  <th>Junio 6</th>
			  <th>Junio 13</th>
			  <th>Junio 20</th>
			  <th>Junio 27</th>
			  <th>Julio 4</th>
			</tr>
		  </thead>
		  <tbody>
<?php
/*$lineas = file('rol_de_juegos_prueba.csv');
foreach ($lineas as $linea_num => $linea){
$datos = explode(",", $linea);
  //$datos = preg_split("/,|\s,/",$linea1);
  //Almacenamos los datos que vamos leyendo en una variable
  $hora_juego = trim($datos[0]);
  $campo    = trim($datos[1]);
  $columna3   = trim($datos[2]);
  $columna4   = trim($datos[3]);
  $columna5   = trim($datos[4]);
  $columna6   = trim($datos[5]);
  $columna7   = trim($datos[6]);
  $columna8   = trim($datos[7]);  
?>  
  <tr>
<!--      <td rowspan="2">-->
    <td><?php echo $hora_juego;?></td>
      <td><?php echo $campo;?></td>
      <td><?php echo $columna3?></td>
      <td><?php echo $columna4?></td>
      <td><?php echo $columna5?></td>
      <td><?php echo $columna6?></td>
      <td><?php echo $columna7?></td>
      <td><?php echo $columna8?></td>
    </tr>
<?php
}*/
?>

		  </tbody>
		</table>

        </div>
        <div class="footer row">
          <div class="col-sm-4">
            <h6 class="dorado text-uppercase">Coordinación Administrativas</h6>
            <p>Alma Grisel Reyes Aviles<br>
              Ángel Cedillo Hernández<br>
              Bernanrdo Castillo López<br>
              César Gómez Rodríguez
            </p>
          </div>
          <div class="col-sm-4">
            <h6 class="dorado text-uppercase">Coordinadores Técnicos</h6>
            <p>Cármen Chávez Rosas<br>
              Oliver Mancera González<br>
              Juan Ignacio Calderón Ramírez
            </p>
          </div>
          <div class="col-sm-4">
            <h6 class="dorado text-uppercase">Coordinadores Técnicos CAT</h6>
            <p>Kissy Guzmán Tinajero</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  
<?php 
endif;
?>
