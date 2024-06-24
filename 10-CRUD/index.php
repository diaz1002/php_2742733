<?php 
session_start();


if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['usuario'];
    $password = $_POST['contraseña'];

    $usuario_register = isset($_SESSION['usuarioRegistrado']) ? $_SESSION['usuarioRegistrado'] : null;
    $contraseña_register = isset($_SESSION['contraseñaRegistrado']) ? $_SESSION['contraseñaRegistrado'] : null;


    if (empty($usuario) or empty($password)) {
        echo '<div class="text-success alert alert-primary" role="primary">' . 'Rellene completo el formulario' . '</div>';
    } else {

        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
            echo "";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("SELECT * FROM userapp WHERE username = :usuario AND contraseña = :pass ");
        //$statement = $conexion->prepare("SELECT * FROM `userapp` WHERE `username` = :usuario AND `contraseña` = :pass");

        $statement->execute(array(":usuario" => $usuario, ":pass" => $password));

        $result = $statement->fetchAll();

        //print_r($statement);

        if ($result) {
            echo 'ejecutando...';
            $_SESSION['usuarioRegistrado'] = $usuario;
            $_SESSION['contraseñaRegistrado'] = $password;
            header('location: user.php');
        } else {
            echo '<div class="text-success alert alert-primary" role="primary">' . 'El usuario o la contraseña son incorrectos' . '</div>';
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
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #5FA8D9;">

<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./galeria/Faa-logo-tiburones.png" alt="Logo" width="50" height="40" class="d-inline-block align-text-top">
      SHARK 
    </a>
  </div>
</nav>
   
    <div class="let">
        <div class="card" style="width: 18rem; background-color:#608FFC; ">
        <img class="im" src="./galeria/us.png" alt="">
            <div class="card-body">
                <h3 class="card-title">Pagina de inicio</h3>
                <p class="card-text">

                <form action="index.php" method="POST">
                    <label for="usuario"></label>
                    <input class="use" id="usuario" type="text" placeholder="Nombre de usuario..." name="usuario">
                    <br>
                    <label for="contraseña" required></label>
                    <input class="crt" id="contraseña" type="password" placeholder="Contraseña..." name="contraseña">
                    <br>
                    <button style="color: white; text-decoration:none" type="submit" class="btn btn-outline-primary in1">Iniciar de sesion </button>
                    <br>
                    <br>
                </form>

                </p>
                <button type="button" class="btn btn-outline-primary rg1"><a href="./registro.php" class="card-link" style="color: white; text-decoration:none;">Registrate</a></button>

            </div>

        </div>

    </div>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>