<?php

require('conexion.php');
require('header.php');




?>



<?php if (isset($_SESSION['usuarioRegistrado'])) :  ?>

  <h1>Bienvenido <?php echo $_SESSION['usuarioRegistrado']; ?> </h1>

  <a href="./cerrar.php">Cerrar</a>
  <a href="./index.php">Home</a>

<?php else : ?>

  <h1>No has iniciado sesion</h1>
  <a href="./index.php">Iniciar sesion</a>


<?php endif   ?>

<?php if (isset($_SESSION['mensaje'])) { ?>
  <div class="alert <?php $_SESSION['color']    ?> alert-dismissible fade show" role="alert">
    <p class="mb-0"><?php echo  $_SESSION['mensaje']  ?></p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

<?php session_unset();
} ?>

<form action="agregar_curso.php" method="POST" enctype="multipart/form-data">


  <table class="table">
    <tbody>
      <tr>
        <td>
          <label for="TituloCurso">nombre de curso</label> <br>
          <input type="text" name="TituloCurso" id="TituloCurso" placeholder="AgregarCurso">
        </td>
        <td>
          <label for="ImagenCurso">Imagen del Curso</label> <br>
          <input type="file" name="ImagenCurso" id="ImagenCurso" placeholder="AgregarCurso">
        </td>
        <td>
          <label for="DescripcionCurso">Descripción</label> <br>
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
        <th scope="col">Imagen</th>
        <th scope="col">Curso</th>
        <th scope="col">Descripción</th>
        <th scope="col">Estudiantes</th>
        <th scope="col">Acción</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $statement = $conexion->prepare("SELECT * FROM curso");
      $statement->execute();
      $result = $statement->fetchAll();


      foreach ($result as $item) { ?>
        <tr>
          <th scope="row"> <?php echo $item['ID']  ?>  </th>
          <td> <?php echo $item['Imagen']  ?> </td>
          <td> <?php echo $item['Curso']  ?> </td>
          <td><?php echo $item['Descripción']  ?></td>
          <td><?php echo $item['Estudiantes']  ?></td>
          <td class="d-flex gap-4">
            <a class="text-success" href="editar_curso.php?id=<?php echo $item['ID']?>"> <i class="bi bi-pencil-fill"></i></a>
            <a class="text-danger" href="borrar_curso.php?id=<?php echo $item['ID']?>"> <i class="bi bi-trash-fill"></i></a>
          </td>


        </tr>


      <?php  } ?>


    </body>
  </table>
  
</div>

<?php
require('footer.php')
?>