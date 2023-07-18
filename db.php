<?php

$servidor = "localhost";
$baseDeDatos = "usuarios";
$usuario = "root";
$contrasena = "";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $baseDeDatos);

if (!$conexion) {
  die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

?>