<?php require('conexion.php');

    //Si los datos fueron editados GET/POST

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $statement= $conexion->prepare("SELECT * FROM `cursos` WHERE `id` = $id");
        $statement->execute();
        $result = $statement->fetch();

        $titulo = $result['titulo'];
        $descripcion = $result['descripcion'];

        echo "Titulo de la tarea:" . $titulo . '<br>';
        echo "Descripcion de la tarea:" . $descripcion . '<br>';

    }

?>

<?php

require('header.php');

?>

<div class="container">
    <div class="nav">
        <div class="col">
            <form action="editar_curso.php" method="POST">
                <label for="titulo">Titulo del curso</label>
                <input class="form-control" type="text" name="titulo_curso" value="<?php echo $titulo ?>">
                <label for="descripcion">Descripcion</label>
                <input type="form-control" type="text" name="descripcion" value="<?php echo $descripcion ?>">
                <input type="sumbit" class="btn btn-success" name="actualizar_curso" value="Actualizar">
            </form>
        </div>
    </div>
</div>

<?php

require('footer.php');

?>