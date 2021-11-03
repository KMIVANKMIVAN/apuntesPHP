<?php
function concatenar($nombre, $apellido){
    echo $nombre.' '.$apellido;
}

concatenar("Ivan","Cc");

function sumarNumeros($numeros){
    $suma = 0;
    for ($i=0; $i < 4; $i++) { 
        $suma = $suma + $numeros[$i];
    }
    echo "la suma de los valores del array es: " . $suma;
}
$numeros = array(1,2,3,4);
sumarNumeros($numeros);

var_dump(is_array($numeros));
?>
