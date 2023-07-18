<?php

require '../db.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['contrasena'];

// Consulta preparada para evitar inyecciones de MySQL
$q = "SELECT COUNT(*) as contar from usuarios where nombre_usuario = ? and contraseña = ?";
$consulta = mysqli_prepare($conexion, $q);
mysqli_stmt_bind_param($consulta, "ss", $usuario, $clave);
mysqli_stmt_execute($consulta);
$resultado = mysqli_stmt_get_result($consulta);
$array = mysqli_fetch_assoc($resultado);

if ($array['contar'] > 0) {
    $_SESSION['username'] = $usuario;

    // Obtener el nombre correspondiente al nombre de usuario
    $consultaNombre = mysqli_prepare($conexion, "SELECT nombre FROM usuarios WHERE nombre_usuario = ?");
    mysqli_stmt_bind_param($consultaNombre, "s", $usuario);
    mysqli_stmt_execute($consultaNombre);
    $resultadoNombre = mysqli_stmt_get_result($consultaNombre);
    $filaNombre = mysqli_fetch_assoc($resultadoNombre);
    $nombre = $filaNombre['nombre'];

    // Guardar el nombre en una variable
    $_SESSION['nombre'] = $nombre;

    // Obtener la imagen correspondiente al nombre de usuario
    $consultaImg = mysqli_prepare($conexion, "SELECT foto FROM usuarios WHERE nombre_usuario = ?");
    mysqli_stmt_bind_param($consultaImg, "s", $usuario);
    mysqli_stmt_execute($consultaImg);
    $resultadoImg = mysqli_stmt_get_result($consultaImg);
    $filaImg = mysqli_fetch_assoc($resultadoImg);
    $imagenBLOB = $filaImg['foto'];

    // Codificar la imagen como Base64
    $imagenBase64 = base64_encode($imagenBLOB);

    // Guardar la imagen codificada en una variable de sesión
    $_SESSION['imagen'] = $imagenBase64;

    header("location: home.php");
} else {
    header("location: iniciar.php?error=true");
}

?>