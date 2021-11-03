<?php
$valorA = true;
$valorB = true;

$resultado = $valorA && $valorB;
var_dump($resultado);

var_dump($valorA or $valorB);
var_dump($valorA xor $valorB);
var_dump(! ($valorA or $valorB)); //negacion

?>