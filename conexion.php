<?php
$conexion = mysqli_connect("localhost", "root", "", "inmobiliaria");
if (!$conexion) {
      echo 'paila';
} else {
      echo 'sisisi';
}