<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];
    $password_2 = $_POST['contraseña_2'];
    $correo = $_POST['correo'];
}



if (empty($usuario) or empty($password)) {
     echo '<p style = "color: red;">' . "Rellene completo el formulario" . '</p>';
} else {
    
    //echo $usuario . '-' . $password;
    $_SESSION['usuarioRegistrado'] = $usuario;
    $_SESSION['correoRegistrado'] = $correo;
    $_SESSION['contraseñaRegistrado'] = $password;
    $_SESSION['contraseña2Registrado'] = $password_2;

    try {
        $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
        echo "";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare("INSERT INTO `userapp` (`ID`, `username`, `correo`, `contraseña` ) 
    VALUES ( NULL, :usuario, :correo, :pass)");
    
    $statement->execute( array(":usuario"=>$usuario, ":pass"=>$password, ":correo"=>$correo));
    
    $statement = $statement->fetchAll();

    if($password == $password_2){
        echo '<p style = "color: blue;">' . "Datos validos" . '</p>';
    }else{
        echo '<p style = "color: red;">' . "Las contraseñas no son iguales" . '</p>';
    }

}








?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
        <label for="contraseña_2" required>Contraseña</label>
        <input id="contraseña_2" type="password" placeholder="Confirme su contraseña..." name="contraseña_2">
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







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>    
</body>

</html>