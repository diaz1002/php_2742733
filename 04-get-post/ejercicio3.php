<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];


if ($n1 >= $n2 && $n1 >= $n3) {
    echo "El numero mayor es el $n1";
} 

elseif ($n2 >= $n1 && $n2 >= $n3){
    echo "el numero mayor es el $n2";
} 

else {
    echo "El numero mayor es el $n3";
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="ejercicio3.php" method="post">
<label for="n1">Número 1</label>
<input id="n1" type="text" placeholder="Número 1..." name="n1">

<br>

<label for="n2" required>Número 2</label>
<input id="n2" type="text" placeholder="Número 2..." required name="n2">

<br>

<label for="n3">Número 3</label>
<input id="n3" type="text" placeholder="Número 3..." name="n3">

<br>

<button type="submit">Enviar</button>
</form>

</body>
</html>