<?php 
session_start();


if($_SERVER["REQUEST_METHOD"] == 'POST' ){
    
    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];

    $usuario_register = isset( $_SESSION['usuarioRegistrado'] ) ? $_SESSION ['usuarioRegistrado'] : null;
    $contraseña_register = isset( $_SESSION['contraseñaRegistrado'] ) ? $_SESSION ['contraseñaRegistrado'] : null;


    if(empty($usuario) or empty($password)){
        echo 'Rellene completo el formulario';
    }else{
        
        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "conexion ok <br> ";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
        $statement = $conexion->prepare("SELECT * FROM userapp WHERE username = :usuario AND contraseña = :pass ");
        
        $statement->execute( array(":usuario"=>$usuario, ":pass"=>$password));
        
        $result = $statement->fetchAll();

        print_r($statement);

        if($result){
            $_SESSION['usuarioRegistrado'] = $usuario;
            $_SESSION['contraseñaRegistrado'] = $password;
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
   


</body>

</html>