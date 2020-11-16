<?php
$conexion = mysqli_connect("https://www.oscaremccomco.github.io/", "root", "", "inmobiliaria");
if (!$conexion) {
      echo 'paila';
} else {
      echo 'sisisi';
}