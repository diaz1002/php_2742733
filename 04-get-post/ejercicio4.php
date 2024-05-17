<?php

$metros = $_POST["metros"];

$muro = $_POST["muro"];



if ($muro == "liso") {
    echo "El valor de todo es". ($metros * 2000 + 15000);
} else {
    echo "El valor de todo es". ($metros *4000 + 15000);
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
<form action="ejercicio4.php" method="post">
    <label for="metros">Metros^2</label>
    <input id="metros" type="numero" placeholder="Metros ^2..." name="metros">

    <br>

    <label for="muro" required>muro</label>
    <input id="muro" type="text" placeholder="Liso/No liso..." required name="muro">    

    <button type="submit">Enviar</button>
</form>

</body>
</html>