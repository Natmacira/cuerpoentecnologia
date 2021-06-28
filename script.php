<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/* '<p> </p>' */

$areaLaboral      = '';
$cantidadHoras    = '';
$actividadFisica  = '';
$atencionPostura  = 'no';
$dolores          = 'no';  
$compensar        = 'no';
/* area laboral */

if ( ! empty( $_POST['areaLaboral']) && is_string( $_POST['areaLaboral']) ) {
    $areaLaboral = $_POST['areaLaboral'];
  /*  echo '<p>Trabaja en el área de: </p>' . $areaLaboral . '<br>'; */
    
} 

/* cantidad de horas */

if ( ! empty( $_POST['cantidadHoras']) && is_numeric( $_POST['cantidadHoras']) ) {
    $cantidadHoras = $_POST['cantidadHoras'];
  //  echo '<p>Cantidad de horas laborales por semana:</p>' . $cantidadHoras . '<br>';
    
} 

/* Atencion postura */

if ( ! empty( $_POST['atencion-postura']) && ($_POST['atencion-postura'] === 'yes') ) {
    $atencionPostura = $_POST['atencion-postura']; 
    
}; 


/* dolores */

if ( ! empty( $_POST['dolores']) && ($_POST['dolores'] === 'yes') ) {
    $dolores = $_POST['dolores']; 
      
  } 
  


/* compensar */

if ( ! empty( $_POST['compensar']) && ($_POST['compensar'] === 'yes') ) {
    $compensar = $_POST['compensar'];
} 



/* actividad */

if ( ! empty( $_POST['que-actividad-haces']) && is_string( $_POST['que-actividad-haces']) ) {
    $actividadFisica = $_POST['que-actividad-haces'];
    
} 

// $mensaje = 

if ( $areaLaboral !== '' && $cantidadHoras !== '' && $atencionPostura  !== null && $dolores !== null && $compensar !== null ) {
  /*  mail('natmaciraestudionomade@gmail.com', 'Respuesta Form', $mensaje);*/
    header('location: gracias.php#gracias');
} else {
    header('location: index.php');
}





?>



