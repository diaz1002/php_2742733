<?php require('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    echo"Datos enviados";

    $TituloCurso = $_POST['TituloCurso'];
    $ImagenCurso = $_POST['ImagenCurso'];
    $DescripcionCurso = $_POST['DescripcionCurso'];
    $EstudiantesCurso = $_POST['EstudiantesCurso'];

    $statement = $conexion->prepare("INSERT INTO 'curso'(`Imagen`, `Curso`, `Descripción`, `Estudiantes`) VALUES (?,?,?,?)");
    $statement->execute(array($ImagenCurso,$TituloCurso,$DescripcionCurso,$EstudiantesCurso));

    //header('location: user.php');




}
    
?>