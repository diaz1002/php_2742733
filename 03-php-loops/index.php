<?php
echo "WHILE <br>";
/* while */

/* de 50 en 50 hasta 1000*/

$i = 0;

while ($i < 1000){
echo $i+= 50, "<br>";
}

echo "<br>";
?>



<?php
echo "FOR <br>";

/* for */
/* tabla del 3 */


for ($o = 0; $o <= 10; $o++){
echo "3 x ", $o, " = ", $o * 3, "<br>";
}

echo "<br>"
?>


<?php

echo "FOREACH <br>";
/* foreach */
/* nombres */

$personas = array("pedro", "juan", "karem", "diego");

foreach($personas as $p) {
    echo "$p <br>";
}


?>


