<!-- ejercicio 1 -->

<?php

$cantidad = "40";

if($cantidad < 12)   {
    echo "caja rapida";
} else{
    echo "caja normal";
}

echo "<br/> <br/>";

?>

<?php
$edad = "20";

if($edad >= 18) {
    echo "puede votar";
} else{
    echo "no puede votar";
}

echo "<br/> <br/>";
?>


<!--  jercicio 2 -->

<?php

$años = "20";
$nombre = "digo";

if($años < 18) {
    echo "no puede entrar a la discoteca <br/>";
} else{
    echo "puede entrar a la discoteca <br/>";
} if($nombre == "mario" xor $nombre == "carlos") {
    echo "puede entrar al VIP <br/>";
} else{
    echo "no puede entrar al VIP <br/>";
}

{
    echo "<br/> <br/> <br/>"; 
}


?>



<!-- ejercicio 3 -->

<?php

$old = "16";

$velocidad = "30";

$estatura = "174";

if ($velocidad > 27 && $estatura > 170) {
    echo "puede ingresar al equipo <br/>";
} else {
    echo "no puede ingresar <br/>";
}

if ($velocidad > 27 && $estatura > 170 && $old > 18) {
    echo "vas a ligas mayores";
} else {
    echo "vas a ligas menores <br/> <br/> ";
}

?>


<!-- ejercicio 4 -->

<?php
$aire = "rojo";

switch($aire){
    case "verde":
        echo "calidad del aire buena";
    break;
    case "amarillo":
        echo "calidad del aire moderado";
    break;
    case "naranja":
        echo "calidad del aire no es saludable para grupos sensibles";
    break;
    case "rojo":
        echo "calidad del aire no es saludable";
    break;
    case "purpura":
        echo "calidad del aire es muy poco saludable";
    break;
    case "marron":
        echo "calidad del aire peligrosa";
    break;
    default:
        echo "el color no es válido";
    break;
}



?>