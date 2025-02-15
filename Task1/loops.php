<?php
//1//
for ($number = 1; $number <= 10; $number++) {
    echo "{$number}";
    if ($number < 10) {
        echo" - ";
    }
}

echo "<hr>";

//2//
$sum = 0;
for ($number = 0; $number <= 30; $number++) {
    $sum += $number;
}

echo"total is {$sum}";

echo "<hr>";

//3//
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == 0) {
            echo "A ";
        } elseif ($i == 1) {
            echo ($j < 3) ? "A " : "B ";
        } elseif ($i == 2) {
            echo ($j < 2) ? "A " : "C ";
        } elseif ($i == 3) {
            echo ($j < 1) ? "A " : "D ";
        } else {
            echo "E ";
        }
    }
    echo "<br>";
}
echo "<hr>";

//4//
for ($i =0 ; $i < 5 ; $i++) {
    for ($n =0 ; $n < 5 ; $n++){
        if ($i == 0) {
            echo "1 ";
        } else if ($i == 1) {
            echo ($n < 3)? "1 " : "2 ";
        } else if ($i == 2) {
            echo ($n < 2)? "1 " : "3 ";
        } else if ($i == 3) {
            echo ($n < 1)? "1 " : "4 ";
        } else {
            echo "5 ";
        } 
    }
    echo "<br>";
}
echo "<hr>";

//5//
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($i == $j) {
            echo ($i + 1) . " ";
        } else {
            echo "0 "; 
        }
    }
    echo "<br>";
}
echo "<hr>";

//6//
$number = 5;
$factorial = 1;

for ($i = 1 ; $i <= $number ; $i++) {
    $factorial *= $i;
}
echo $factorial;

echo "<hr>";

//7//
echo '<table border= 1px style="border-collapse: collapse;">';
for ($i = 1;$i <= 6;$i++) {
    echo"<tr >";
    for ($j = 1;$j <= 5;$j++) {  
        echo'<td  style= "padding: 3px;"">' . "{$i} * {$j} = " . $i*$j . '</td>';
    }
    echo"</tr>";
}
echo "</table>";
?>