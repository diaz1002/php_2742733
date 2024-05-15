<!-- super globals GET Y POST -->

<?php

$UserName = $_POST["username"];

$UserEmail = $_POST["useremail"];

echo $UserName;
echo "<br>";
echo $UserEmail;


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: <?php echo $_POST["color"] ?>}

    </style>
</head>
<body>

<form action="index.php" method="post">
<label for="username">Username</label>
<input id="usermane" type="text" placeholder="username..." name="username">
<br>
<label for="useremail" required>Useremail</label>
<input id="useremail" type="email" placeholder="Useremail..." required name="useremail">
<br>
<label for="color">Color</label>
<input id="color" type="text" name="color" placeholder="Cambio de color...">
<button type="submit">Enviar</button>



</form>



</body>
</html>