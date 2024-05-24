<?php

//session_start();

//$_SESSION['nombre'] = 'Pepito';
//$_SESSION['pais'] = 'Colombia';
//$usuario = $_POST['usuario'];
//$contraseña = $_POST['contraseña'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <h1>pagina de inicio </h1>


    <form action="registro.php" method="post">
        <label for="usuario">Usuario</label>
        <input id="usuario" type="text" placeholder="Nombre de usuario..." name="usuario">
        <br>
        <label for="contraseña" required>Contraseña</label>
        <input id="contraseña" type="password" placeholder="Contraseña..." name="contraseña">
        <br>
        <button type="submit">Registro</button>
        <br>
        <br>
    </form>
    <a href="./user.php">User page</a>
    <a href="./cerrar.php">Cerrar</a>


</body>

</html>