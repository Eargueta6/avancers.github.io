<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/iniciar.css">
</head>

<body>
    <div class="menu">
        <div class="logo">LOGO</div>
        <div class="link">
            <a href="./registrar.php" class="lins">Ingresar</a>
            <a href="../index.php" class="lins">Regresar</a>
        </div>
    </div>

    <div class="form">
        <div class="img">
            <img src="../multimedia/usuario.png" alt="imagen de usuario">
        </div>
        <form action="user.php" method="POST">
            <div class="usuario">
                <div class="form-i">
                    <img src="../multimedia/usuario.png" alt="imagen usuario">
                </div>
                <input type="text" id="username" name="usuario" placeholder="Usuario" required>
            </div>

            <div class="contraseña">
                <div class="form-i">
                    <img src="../multimedia/contraseña.png" alt="imagen contraseña">
                </div>
                <input type="password" id="password" name="contrasena" placeholder="Contraseña" required>
            </div>

            <input class="imput" type="submit" value="Iniciar sesión">
        </form>

    </div>

    <script>
    // Comprueba si el parámetro 'error' está presente en la URL
    const urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');

    // Muestra el alert si el parámetro 'error' es igual a 'true'
    if (error === 'true') {
        alert("Los datos son incorrectos");
    }
    </script>
</body>

</html>