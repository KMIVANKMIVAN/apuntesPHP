<?php
$valorA = 5;
if ($valorA < 10) {
    echo "si es menor a 10";
}
else{
    echo "no es mayor a 10";
}
$i = 0;
while ($i <= 10) {
    echo $i++;
}
$i = 0;
do {
    echo $i++;
} while ($i <= 10);
$arr = array(1,2,3,4,5);
for ($i=0; $i < 5; $i++) {
    echo $arr[$i];
}
foreach ($arr as $value) {
    echo $value;
}
$valorA = 5;
switch ($valorA) {
    case 1:
        echo "el valor es 1";
        break;
    case 2:
        echo "el valor es 1";
        break;
    case 3:
        echo "el valor es 1";
        break;
    default:
        echo "no es ninguno de los valores 1 2 3";
    break;
}
?>