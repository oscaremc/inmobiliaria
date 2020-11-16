<?php
include 'conexion.php';

// recibir los datos y almancenarlos en variables

$tipo = $_GET["tipo"];
$sector = $_GET["sector"];
$barrio = $_GET["barrio"];
$antiguedad = $_GET["antiguedad"];
$estracto = $_GET["estracto"];
$estado = $_GET["estado"];
$precio = $_GET["precio"];
$metros = $_GET["metros"];
$garaje = $_GET["garaje"];
$habitacion = $_GET["habitacion"];
$banos = $_GET["banos"];
$estracto = $_GET["estracto"];
$descripcion = $_GET["descripcion"];
$descripcion = $_GET["descripcion"];
$internos1 = $_GET["internos1"];
$internos2 = $_GET["internos2"];
$internos3 = $_GET["internos3"];
$internos4 = $_GET["internos4"];
$internos5 = $_GET["internos5"];
$internos6 = $_GET["internos6"];
$externos1 = $_GET["externos1"];
$externos2 = $_GET["externos2"];
$externos3 = $_GET["externos3"];
$externos4 = $_GET["externos4"];
$externos5 = $_GET["externos5"];
$externos6 = $_GET["externos6"];
$sector1 = $_GET["sector1"];
$sector2 = $_GET["sector2"];
$sector3 = $_GET["sector3"];
$sector4 = $_GET["sector4"];
$sector5 = $_GET["sector5"];
$sector6 = $_GET["sector6"];
$sector7 = $_GET["sector7"];

//consulta para insertar

$insertar = 'INSERT INTO datos(tipo, sector, barrio, antiguedad, estado, precio, metros, garaje, habitacion, banos, estracto, descripcion, interior1, interior2, interior3, interior4, interior5, interior6, exterior1, exterior2, exterior3, exterior4, exterior5, exterior6, sector1, sector2, sector3, sector4, sector5, sector6) 
             VALUES ("$tipo", "$sector", "$barrio", "$antiguedad, "$estado", "$estado", "$precio", "$metros", "$garaje", "$habitacion", "$banos", "$estracto", "$descripcion", "$interior1", "$interior2", "$interior3", "$interior4", "$interior5", "$interior6", "$exterior1", "$exterior2", "$exterior3", "$exterior4", "$exterior5", "$exterior6", "$sector1",  "$sector2",  "$sector3",  "$sector4",  "$sector5",  "$sector6")';

//ejecutar consulta registrar.php

if ($conexion->query($insertar) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $insertar . "<br>" . $conexion->error;
    }

//cerar conexion 
mysqli_close($conexion);

?>