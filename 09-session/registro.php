<?php

if($_POST['usuario']){

session_start();


$_SESSION['nombre'] = $_POST ['usuario'];
$_SESSION['contraseña'] = $_POST ['contraseña'];


echo 'puede iniciar sesion';

}


?>