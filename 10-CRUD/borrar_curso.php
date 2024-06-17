<?php
require('conexion.php');

    if(isset ($_GET['id'])){
        $id = $_GET['id'];

        $statement = $conexion->prepare("DELETE FROM `curso` WHERE ID = $id ");
        $statement->execute();

        $_SESSION['mensaje'] = 'Curso eliminado';
        $_SESSION['color'] = 'danger';

        header('location:user.php');




    }

?>