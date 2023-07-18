<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/registrar.css">
</head>

<body>
    <div class="menu">
        <div class="logo">LOGO</div>
        <div class="link">
            <a href="#" class="lins">Iniciar sesión</a>
            <a href="../index.php" class="lins">Regresar</a>
        </div>
    </div>

    <div class="form">
        <div class="img">
            <img src="" alt="" id="image2">
        </div>
        <form action="input.php" method="POST" enctype="multipart/form-data">
            <div class="file">
                <input type="file" accept="image/*" id="fileInput" name="img" required>
                <label for="fileInput">
                    <div class=" label label1">Ninguna foto seleccionada</div>
                    <div class=" label label2">Buscar foto</div>
                </label>
            </div>
            <div class="usuario nombre">
                <div class="form-i">
                    <img src="../multimedia/usuario.png" alt="imagen usuario">
                </div>
                <input type="text" id="name" name="name" placeholder="Nombre completo" required>
            </div>
            <div class="usuario">
                <div class="form-i">
                    <img src="../multimedia/usuario.png" alt="imagen usuario">
                </div>
                <input type="text" id="username" name="username" placeholder="Nombre de usuario" required>
            </div>

            <div class="contraseña">
                <div class="form-i">
                    <img src="../multimedia/contraseña.png" alt="imagen contraseña">
                </div>
                <input type="password" id="password" name="password" placeholder="Contraseña" required>
            </div>

            <input class="imput" type="submit" value="Crear cuenta">
        </form>

    </div>

    <script src="../js/resgistrar.js"></script>
</body>

</html>