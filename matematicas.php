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
    <link rel="stylesheet" href="../css/mate.css">
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


    <div class="quiz-container">
        <h1>Quiz de Matemáticas</h1>
        <form action="result.php" method="post">
            <ol>
                <li>
                    <h3>¿Cuánto es 2 + 2?</h3>
                    <div>
                        <input type="radio" name="question1" value="a">a) 2<br>
                        <input type="radio" name="question1" value="b">b) 3<br>
                        <input type="radio" name="question1" value="c">c) 4<br>
                        <input type="radio" name="question1" value="d">d) 5<br>
                    </div>
                </li>
                <!-- Repite el bloque de código anterior para las preguntas restantes -->
                <!-- Puedes modificar las preguntas y opciones de respuesta según tus necesidades -->
            </ol>
            <input type="submit" value="Terminar">
        </form>
    </div>
</body>

</html>