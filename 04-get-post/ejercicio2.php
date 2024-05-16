
<?php

$htrabajo = $_POST["htrabajo"];

$precio = $_POST["precio"];

$sueldo = $htrabajo * $precio;



echo $htrabajo * $precio;

if ($sueldo >= 2200000)   {
    echo "Retencion de fuente";
}  else {
    echo "No hay retencion de fuente";
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

<form action="ejercicio2.php" method="post">
<label for="htrabajo">Horas de Trabajo</label>
<input id="htrabajo" type="text" placeholder="Horas de trabajo..." name="htrabajo">
<br>
<label for="precio" required>Precio</label>
<input id="precio" type="text" placeholder="Precio de una hora de trabajo...">
<br>
<button type="submit">Enviar</button>
    
</body>
</html>