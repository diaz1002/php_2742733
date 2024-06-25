<?php require('conexion.php');

//Si los datos fueron editados GET/POST

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $statement = $conexion->prepare("SELECT * FROM `curso` WHERE `id` = $id");
    $statement->execute();
    $result = $statement->fetch();

    $Curso = $result['Curso'];
    $Descripción = $result['Descripción'];
    $Estudiantes = $result['Estudiantes'];

    echo "Curso de la tarea:" . $Curso . '<br>';
    echo "Descripcion de la tarea:" . $Descripción . '<br>';
    echo "Estudiantes de la tarea:" . $Estudiantes . '<br>';
}

if (isset($_POST['actualizar_curso'])) {

    $id = $_GET['id'];
    $CursoActualizado = $_POST['Curso'];
    $DescripciónActualizada = $_POST['Descripcion'];
    $EstudiantesActualizados = $_POST['Estudiantes'];

    $ImagenCurso = $_FILES['ImagenCurso']['tmp_name'];
    $nombreImagen = $_FILES['ImagenCurso']['name'];
    $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $sizeImg = $_FILES['ImagenCurso']['size'];
    $directorio = "imagenes/";


    if ($tipoImagen == 'jpg' or $tipoImagen == 'png' or $tipoImagen == 'jpeg') {

        
        $ruta = $directorio . $id . '.' . $tipoImagen;

        $statement = $conexion->prepare("UPDATE `curso` SET `Imagen`=?,`Curso`=? ,`Descripción`=?,`Estudiantes`=? WHERE id = ? ");

        $statement->execute(array($ruta, $CursoActualizado, $DescripciónActualizada, $EstudiantesActualizados, $id));

        if (move_uploaded_file($ImagenCurso, $ruta)) {
            $_SESSION['mensaje'] = 'Curso actualizado exitosamente';
            $_SESSION['color'] = 'success';

            header('location: user.php');
        }

       
    }else{
        $_SESSION['mensaje'] = 'Formato no admitido';
        $_SESSION['color'] = 'danger';

        header('location: user.php');
    }
}

?>

<?php

require('header.php');

?>
<button class="btn btn-light" >
    <a href="user.php">USER</a>
</button>
<div class="container">
    <div class="nav">
        <div class="col">
            <form action="editar_curso.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">

                <label for="imagen">Imagen del curso</label> 
                <input class="from-control" type="file" name="ImagenCurso"> <br>
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