<?php
include 'conexion.php';

// recibir los datos y almancenarlos en variables

$tipo = $_POST["tipo"];

//consulta para insertar

$insertar = 'INSERT INTO datos(tipo) VALUES ("$tipo")';

//ejecutar consulta registrar.php

if ($conexion->query($insertar) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $insertar . "<br>" . $conexion->error;
    }

//cerar conexion 
mysqli_close($conexion);