<?php require('conexion.php');

    //Si los datos fueron editados GET/POST

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $statement= $conexion->prepare("SELECT * FROM `curso` WHERE `id` = $id");
        $statement->execute( );
        $result = $statement->fetch();

        $Curso= $result['Curso'];
        $Descripción= $result['Descripción'];
        $Estudiantes= $result['Estudiantes'];

        echo "Curso de la tarea:" . $Curso . '<br>';
        echo "Descripcion de la tarea:" . $Descripción . '<br>';
        echo "Estudiantes de la tarea:" . $Estudiantes . '<br>';

    }

    if(isset($_POST['actualizar_curso'])){
        echo "<h1>Formulario de actualización enviado</h1>";

        $id = $_GET['id'];
        $CursoActualizado= $_POST['Curso'];
        $DescripciónActualizada= $_POST['Descripcion'];
        $EstudiantesActualizados= $_POST['Estudiantes'];

        $statement=$conexion->prepare("UPDATE `curso` SET `Curso`=?,`Descripción`=?,`Estudiantes`=? WHERE id = ? ");

        $statement->execute(array ($CursoActualizado,$DescripciónActualizada,$EstudiantesActualizados,$id ));
        header('location:user.php');
    }

?>

<?php

require('header.php');

?>

<div class="container">
    <div class="nav">
        <div class="col">
            <form action="editar_curso.php?id=<?php echo $id ?>" method="POST">
                <label for="titulo">Titulo del curso</label>
                <input class="form-control" type="text" name="Curso" value="<?php echo $Curso ?>">
                <label for="descripcion">Descripcion</label>
                <input type="form-control" type="text" name="Descripcion" value="<?php echo $Descripción ?>"> <br>
                <label for="Estudiantes">Estudiantes</label>
                <input type="form-control" type="text" name="Estudiantes" value="<?php echo $Estudiantes ?>"> <br>
                <input type="submit" class="btn btn-success" name="actualizar_curso" value="Actualizar">
            </form>
        </div>
    </div>
</div>

<?php

require('footer.php');

?>