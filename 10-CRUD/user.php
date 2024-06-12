<?php

session_start();




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <?php if (isset($_SESSION['usuarioRegistrado'])) :  ?>

        <h1>Bienvenido <?php echo $_SESSION['usuarioRegistrado']; ?> </h1>

        <a href="./cerrar.php">Cerrar</a>
        <a href="./index.php">Home</a>

    <?php else : ?>

        <h1>No has iniciado sesion</h1>
        <a href="./index.php">Iniciar sesion</a>


    <?php endif   ?>

    <form action="agregar_curso.php" method="POST">


  <table class="table">
    <tbody>
      <tr>
        <td>
          <label for="TituloCurso">nombre de curso</label> <br>
          <input type="text" name="TituloCurso" id="TituloCurso" placeholder="AgregarCurso">
        </td>
        <td>
          <label for="ImagenCurso">imagen del curso</label> <br>
          <input type="file" name="ImagenCurso" id="ImagenCurso" placeholder="AgregarCurso">
        </td>
        <td>
          <label for="DescripcionCurso">descripcion</label> <br>
          <input type="text" name="DescripcionCurso" id="DescripcionCurso" placeholder="AgregarCurso">
        </td>
        <td>
          <label for="EstudiantesCurso">Cantidad de estudiantes</label> <br>
          <input type="text" name="EstudiantesCurso" id="EstudiantesCurso" placeholder="AgregarCurso">
        </td>
        <td>
          <input type="submit" value="registrar curso">

        </td>
  
      </tr>
      
    </tbody>
  </table>
</form>


    <div style="display: flex; justify-content: center;" class="tb">
        <table style="width: 80%;" class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre del cliente</th>
                    <th scope="col">Email</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Mar@gmail.com</td>
                    <td>3003495056</td>
                    <td>✏️Edit | 🗑️Delete</td>

                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>Jacob</td>
                    <td>cob@gmail.com</td>
                    <td>3216302570</td>
                    <td>✏️Edit | 🗑️Delete</td>

                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td colspan="1">Paula</td>
                    <td>pau@gmail.com</td>
                    <td>3033214576</td>
                    <td>✏️Edit | 🗑️Delete</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</html>