<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == 'POST' ){
    
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
}

    if(empty($usuario) or empty($password)){
        echo 'Rellene completo el formulario';
    }else{
     //echo $usuario . '-' . $password;
     $_SESSION['usuarioRegistrado'] = $usuario;
     $_SESSION['contraseñaRegistrado'] = $password;
     //echo 'variables de sesion guardadas 🤖';
     //header('Locaton: index.php');
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrate</h1>


    <form action="registro.php" method="POST">
        <label for="usuario">Usuario</label>
        <input id="usuario" type="text" placeholder="Nombre de usuario..." name="usuario">
        <br>
        <label for="contraseña" required>Contraseña</label>
        <input id="contraseña" type="password" placeholder="Contraseña..." name="contraseña">
        <br>
        <button type="submit">Registrarse</button>
        <br>
        <br>
    </form>    

    <?php if(isset($_SESSION['usuarioRegistrado']) ) : ?>
        <p>Datos registrados, ya puedes iniciar sesion</p>
        <p> <?php echo $_SESSION['usuarioRegistrado'] . '-' . $_SESSION['contraseñaRegistrado']; ?> </p>
        <a href="./index.php">Iniciar sesion</a>
    <?php endif ?>

</body>
</html>