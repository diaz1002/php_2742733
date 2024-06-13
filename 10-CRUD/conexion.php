<?php

session_start();


try {
    $conexion = new PDO("mysql: host=localhost; dbname=focaapp", 'root', '');
    echo "";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}





?>