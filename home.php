<?php


session_start();
$usuario = $_SESSION['username'] ?? '';
$nombre = $_SESSION['nombre'] ?? '';
$foto = $_SESSION['imagen'] ?? '';




if (empty($usuario) || empty($nombre)) {
header("Location: iniciar.php");
exit();
}

if (isset($_GET['logout'])) {
session_destroy(); // Destruye la sesión
header("Location: ../index.php"); // Redirige al archivo index.php
exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <div class="menu">
        <div class="logo">LOGO</div>
        <div class="link">
            <a href="?logout=true" class="lins">Cerrar sesión</a>
        </div>
    </div>

    <div class="board">
        <div class="sub1">
            <div class="circulo">
                <img src="data:image/jpg;base64,<?php echo ($foto); ?>" alt="imagen usuario" class="img-c">
            </div>
            <div class="nombres">
                <h1><?php echo $nombre;?></h1>
                <h2><?php echo $usuario; ?></h2>
            </div>
        </div>
        <div class="sub2"></div>
    </div>

    <div class="conten1">
        <div class="contenido">
            <h1 class="titulo">Pruebas!</h1>
            <div class="sub-con">
                <a href="" class="examenes mate">
                    <h1>Matematicas</h1>
                </a>
                <a href="" class="examenes len">
                    <h1>Lenguaje</h1>
                </a>
                <a href="" class="examenes soci">
                    <h1>Sociales</h1>
                </a>
                <a href="" class="examenes cien">
                    <h1>Ciencias</h1>
                </a>
            </div>

            <br>
            <br>


        </div>
    </div>
</body>

</html>