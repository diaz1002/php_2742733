<?php

try {
$conexion = new PDO("mysql: host=localhost; dbname=colegio",'root','');
echo "conexion ok";

} catch (PDOException $e) {
    echo "Error: " . $e ->getMessage();
}

$nombre = 'alejandro';
$edad = '17';
$grado = '10';
$mediatecnica = 'sistemas';
$documento = '123423';

/* vamos a preparar un sentencia SQL y la guardamos en una variable */


$statement = $conexion->prepare("INSERT INTO `estudiantes` (`ID`, `Nombre`, `Edad`, `Grado`, `Media tecnica`, `Documento`) 
VALUES ( NULL, ':nombre', ':edad', ':grado', ':mediatecnica', ':documento')");


/* ejecutar del statement */
$statement->execute( array(":nombre=>$nombre", ":edad=>$edad", ":grado=>$grado", ":mediatecnica=>$mediatecnica", ":documento=>$documento"));


$statement = $statement->fetchAll();

//print_r($statement);


foreach ($statement as $item) {
    echo $item["Nombre"] . "<br>";
}




?>