<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <title>Inicio de session</title>
</head>
<body>
    <form action="iniciarsesion.php" method="POST">
        <h1>INICIO SESION</h1>
        <hr>
        <?php
            if(isset($_GET['error'])){   
        ?>
        <p id="error">
            <?php
                echo $_GET['error']
            ?>
        </p>
        <?php
            }
        ?>
        <br>
        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="text" name="Clave" placeholder="Clave">

            <button type="submit">Iniciar Sesion</button>
            <a href="crearcuenta.php">Crear cuenta</a>

    </form>
</body>
</html>