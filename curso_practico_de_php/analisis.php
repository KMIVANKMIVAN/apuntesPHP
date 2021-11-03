<?php
//print_r($_REQUEST);
$palabras = array("sol","luna","cielo","luz","estrellas","lluvia");

for ($i=0; $i < count($palabras); $i++) { 
    if ($_REQUEST["palabra".$i]==$palabras[$i]) {
        echo "la palabra ingresada es correcta"."<br>";
    }else {
        echo "la palabra ingresada es incorecta, la palabra correcta es ".$palabras[$i]."<br>";
    }
}

?>