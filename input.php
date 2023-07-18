<?php

require '../db.php';

$usuario = $_POST['username'];
$clave = $_POST['password'];
$nombre = $_POST['name'];
$imgPerfil = addslashes(file_get_contents($_FILES['img']['tmp_name']));

// Verificar campos vacíos
if (empty($usuario) || empty($clave) || empty($nombre) || empty($imgPerfil)) {
    echo "Por favor, completa todos los campos.";
    // Puedes redirigir al formulario de nuevo o mostrar un mensaje de error adecuado.
    exit;
}

$sql = "INSERT INTO usuarios (nombre_usuario, contraseña, nombre, foto) VALUES ('$usuario', '$clave', '$nombre', '$imgPerfil')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos ingresados correctamente.";
    header("Location: ../index.php");
} else {
    echo "Error al ingresar los datos: " . $conexion->error;
}

$conexion->close();
?>