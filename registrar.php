<?php
include 'conexion.php';

// recibir los datos y almancenarlos en variables

$tipo = $_POST["tipo"];
$sector = $_POST["sector"];
$barrio = $_POST["barrio"];
$antiguedad = $_POST["antiguedad"];
$estracto = $_POST["estracto"];
$estado = $_POST["estado"];
$precio = $_POST["precio"];
$metros = $_POST["metros"];
$garaje = $_POST["garaje"];
$habitacion = $_POST["habitacion"];
$banos = $_POST["banos"];
$estracto = $_POST["estracto"];
$descripcion = $_POST["descripcion"];
$descripcion = $_POST["descripcion"];
$interior1 = $_POST["interior1"];
$interior2 = $_POST["interior2"];
$interior3 = $_POST["interior3"];
$interior4 = $_POST["interior4"];
$interior5 = $_POST["interior5"];
$interior6 = $_POST["internos6"];
$exterior1 = $_POST["exterior1"];
$exterior2 = $_POST["exterior2"];
$exterior3 = $_POST["exterior3"];
$exterior4 = $_POST["exterior4"];
$exterior5 = $_POST["exterior5"];
$exterior6 = $_POST["exterior6"];
$sector1 = $_POST["sector1"];
$sector2 = $_POST["sector2"];
$sector3 = $_POST["sector3"];
$sector4 = $_POST["sector4"];
$sector5 = $_POST["sector5"];
$sector6 = $_POST["sector6"];
$sector7 = $_POST["sector7"];

//consulta para insertar

$insertarPrimero = "INSERT INTO inmobiliaria(tipo, sector, barrio, antiguedad, estado, precio, metros, garaje, habitacion, banos, estracto, descripcion) 
             VALUES ('$tipo', '$sector', '$barrio', '$antiguedad', '$estado', '$estado', '$precio', '$metros', '$garaje', '$habitacion', '$banos', '$estracto', '$descripcion')";

$insertarSecuandario = "INSERT INTO caracter(interior1, interior2, interior3, interior4, interior5, interior6, exterior1, exterior2, exterior3, exterior4, exterior5, exterior6, sector1, sector2, sector3, sector4, sector5, sector6)
                          VALUES ('$interior1', '$interior2', '$interior3', '$interior4', '$interior5', '$interior6', '$exterior1', '$exterior2', '$exterior3', '$exterior4', '$exterior5', '$exterior6', '$sector1', '$sector2', '$sector3', '$sector4', '$sector5', '$sector6')";



//ejecutar consulta registrar.php

if ($conexion->query($insertarPrimero) === TRUE) {
      echo "New record created successfully tabla inmobiliaria";
    } else {
      echo "Error: " . $insertar . "<br>" . $conexion->error;
    }

if ($conexion->query($insertarSecuandario) === TRUE) {
      echo "New record created successfully tabla caracter";
    } else {
      echo "Error: " . $insertar . "<br>" . $conexion->error;
    
//cerar conexion 
mysqli_close($conexion);

?>