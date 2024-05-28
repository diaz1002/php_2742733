<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $correo = $_POST['correo'];
}

if (empty($usuario) or empty($password)) {
    echo 'Rellene completo el formulario';
} else {
    
    //echo $usuario . '-' . $password;
    $_SESSION['usuarioRegistrado'] = $usuario;
    $_SESSION['correoRegistrado'] = $correo;
    $_SESSION['contraseñaRegistrado'] = $password;

    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
        echo "conexion ok <br> ";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare("INSERT INTO `userapp` (`ID`, `username`, `correo`, `contraseña` ) 
    VALUES ( NULL, :usuario, :correo, :pass)");
    
    $statement->execute( array(":usuario"=>$usuario, ":pass"=>$password, ":correo"=>$correo));
    
    $statement = $statement->fetchAll();

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
        <label for="correo" required>Correo</label>
        <input id="correo" type="email" placeholder="Correo..." name="correo" required="">
        <br>
        <label for="contraseña" required>Contraseña</label>
        <input id="contraseña" type="password" placeholder="Contraseña..." name="contraseña">
        <br>
        <button type="submit">Registrarse</button>
        <br>
        <br>
    </form>

    <?php if (isset($_SESSION['usuarioRegistrado'])) : ?>
        <p>Datos registrados, ya puedes iniciar sesion</p>
        <p> <?php echo $_SESSION['usuarioRegistrado'] . '-' . $_SESSION['contraseñaRegistrado']; ?> </p>
        <a href="./index.php">Iniciar sesion</a>
    <?php endif ?>

</body>

</html>