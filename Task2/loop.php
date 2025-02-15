<?php
//1//
$length = 10;

$fibonacci = [0, 1];


for ($i = 2; $i < $length; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
}

foreach ($fibonacci as $value) {
    echo $value . ", ";
}


?>