<?php
$cal = (isset($_POST['calendario'])) ? $_POST['calendario'] : 1;
$lineas = file('rol_de_juegos_prueba_'.$cal.'.csv');

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
  
  echo '<tr>';
  echo '<td>'.$hora_juego.'</td>';
  echo '<td>'.$campo.'</td>';
  echo '<td>'.$columna3.'</td>';
  echo '<td>'.$columna4.'</td>';
  echo '<td>'.$columna5.'</td>';
  echo '<td>'.$columna6.'</td>';
  echo '<td>'.$columna7.'</td>';
  echo '<td>'.$columna8.'</td>';
  echo '</tr>';
}
?>