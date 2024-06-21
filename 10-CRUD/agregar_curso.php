<?php require('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    echo "Datos enviados";

    $TituloCurso = $_POST['TituloCurso'];


    $ImagenCurso = $_FILES['ImagenCurso']['tmp_name'];
    $nombreImagen = $_FILES['ImagenCurso']['name'];
    $tipoImagen = pathinfo($nombreImagen, PATHINFO_EXTENSION);
    $sizeImg = $_FILES['ImagenCurso']['size'];
    $directorio = "imagenes/";

    $DescripcionCurso = $_POST['DescripcionCurso'];
    $EstudiantesCurso = $_POST['EstudiantesCurso'];


    if ($tipoImagen == 'jpg' or $tipoImagen == 'png' or $tipoImagen == 'jpeg') {
        echo "valido";
        #$statement = $conexion->prepare("INSERT INTO curso ('Imagen','Curso','Descripción','Estudiantes') VALUES('',?,?,?)");
        $statement = $conexion->prepare("INSERT INTO `curso`(`Imagen`, `Curso`, `Descripción`, `Estudiantes`) VALUES ('',?,?,?)");
        $statement->execute(array($TituloCurso, $DescripcionCurso, $EstudiantesCurso));
        $idRegistro = $conexion->lastInsertId();
        

        $ruta = $directorio . $idRegistro . '.' . $tipoImagen;

        #$statement = $conexion->prepare("UPDATE curso SET Imagen = $ruta WHERE id = $idRegistro");
        $statement = $conexion->prepare("UPDATE `curso` SET `Imagen`='$ruta' WHERE ID = '$idRegistro' ");
        
        $statement->execute();

        if (move_uploaded_file($ImagenCurso, $ruta)) {
            $_SESSION['mensaje'] = 'Tarea agregada exitosamente';
            $_SESSION['color'] = 'success';

            header('location: user.php');
        }
    } else {
        $_SESSION['mensaje'] = 'El arcivo de imagen no es admitido';
        $_SESSION['color'] = 'danger';

        header('location: user.php');
    }

    /*  echo "el archivo que subiste se llama:".  $nombreImagen . "<br>";
    echo "el formato de tu imagen es:". $tipoImagen;
 */


    /* $statement = $conexion->prepare("INSERT INTO `curso`(`Imagen`, `Curso`, `Descripción`, `Estudiantes`) VALUES (?,?,?,?)");
    $statement->execute(array($ImagenCurso,$TituloCurso,$DescripcionCurso,$EstudiantesCurso));

    $_SESSION['mensaje'] = 'Tarea agregada exitosamente';
    $_SESSION['color'] = 'success';
 */


    #header('location: user.php');




}
