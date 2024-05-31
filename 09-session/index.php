<?php 
session_start();


if($_SERVER["REQUEST_METHOD"] == 'POST' ){
    
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];

    $usuario_register = isset( $_SESSION['usuarioRegistrado'] ) ? $_SESSION ['usuarioRegistrado'] : null;
    $contraseña_register = isset( $_SESSION['contraseñaRegistrado'] ) ? $_SESSION ['contraseñaRegistrado'] : null;


    if(empty($usuario) or empty($password)){
        echo '<div class="text-success alert alert-danger" role="alert">' . 'Rellene completo el formulario' . '</div>';
    }else{
        
        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }   
    
        $statement = $conexion->prepare("SELECT * FROM userapp WHERE username = :usuario AND contraseña = :pass ");
        //$statement = $conexion->prepare("SELECT * FROM `userapp` WHERE `username` = :usuario AND `contraseña` = :pass");

        $statement->execute( array(":usuario"=>$usuario, ":pass"=>$password));
        
        $result = $statement->fetchAll();

        //print_r($statement);

        if($result){
            echo 'ejecutando...';
            $_SESSION['usuarioRegistrado'] = $usuario;
            $_SESSION['contraseñaRegistrado'] = $password;
            header('location: user.php');
        } else{
            echo "El usuario o la contraseña son incorrectos";
        }

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


    <h1>pagina de inicio </h1>


    <form action="index.php" method="POST">
        <label for="usuario">Usuario</label>
        <input id="usuario" type="text" placeholder="Nombre de usuario..." name="usuario">
        <br>
        <label for="contraseña" required>Contraseña</label>
        <input id="contraseña" type="password" placeholder="Contraseña..." name="contraseña">
        <br>
        <button type="submit">Inicio sesión</button>
        <br>
        <br>
    </form>
    
        <a href="./registro.php">Registrate</a>
   





        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>