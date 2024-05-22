<?php

/* SELECT DISTINCT edad FROM estudiantes */ 
/* imprime los datos que no se repitan en la columna edad */



/* SELECT *estudiantes WHERE edad="18" */
/* imprime los estudiantes que tienen 18 años */


/* (SELECT * FROM Customers WHERE Customer ID=1; */
/* imprime el que este en la primer fila */


/* SELECT * FROM Customers WHERE Customer ID > 50;) */
/* imprime los que esten en las final de la 1 a la 49 */


/* Si quieres devolver todas las columnas, sin especificar el nombre de cada columna, puede usar la sintaxis SELECT *: */


/* SELECT * FROM estudiantes ORDER BY edad; */
/* imprime los estudiantes en orden de edad */


/* SELECT * FROM estudiantes ORDER BY edad DESC; */
/* imprime los estudiantes en numeros descendientes en la edad */


/* SELECT * FROM estudiantes ORDER BY nombre; */
/* imprime el nombre de los alumnos por orden alfabetico */


/* SELECT * FROM estudiaestudiantesERE pais = 'Colombia' AND (nombres LIKE 'A%' OR nombres LIKE 'S%'); */
/* imprime los estudiantes que sean de Colombia y el nombre empiece por A o S */


/* SELECT * FROM estudiantes WHERE media tecnica = 'multimedia' OR pais = 'sistemas'; */
/* imprime los que sean de Colombia o de Venezuela */


/* SELECT * FROM estudiantes WHERE grado = '11' OR nombres LIKE 'A%' OR media tecnica = 'multimedia'; */
/* imprime los que esten el en grado 11 o el nombre empiece por A o sean de multimedia */


/* SELECT * FROM estudiantes WHERE NOT edad= '17'; */
/* imprime estudiantes que no tengan 17 años */


/* SELECT * FROM estudiantes WHERE nombres NOT LIKE 'A%'; */
/* imprime el nombre de los estudiantes que no empiecen por la letra A */


/* SELECT * FROM estudiantes WHERE edad NOT BETWEEN 10 AND 30; */
/* imprime los estudiantes que no tengan entre 10 y 30 años */


/* INSERT INTO estudiantes (nombres, direccion, ciudad, postal, pais) VALUES ('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia') */
/* inserta una nueva fila en estudiantes */


/* INSERT INTO estudiantes (nombres, direccion, ciudad, postal, pais)
VALUES ('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia'),
('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia'),
('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia'),
('Juan', 'cra 73b #12-31, 'Medellin', '50001', 'Colombia'), */
/* inserta distintas filas en estudiantes*/


/* SELECT nombres, ciudad, direccion FROM alumnos WHERE direccion IS NULL; */
/* imprime los estudiantes que no pongan direccion */


/* UPDATE alumnos SET nombres = "Juan", media tecnica = "multimedia" */
/* actualiza la fila los datos de Juan */


/* DELETE FROM estudiantes WHERE nombres="Juan" */
/* borra toda la fila */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>