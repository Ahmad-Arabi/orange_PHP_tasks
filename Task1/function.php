<?php
//1//
function isPrime($number) {
    if ($number < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

$number = 3;
if (isPrime($number)) {
    echo "{$number} is a prime number.";
} else {
    echo "{$number} is not a prime number.";

}

echo "<hr>";

//2//
echo strrev("remove");

echo "<hr>";

//3//
$x = 12;
$y = 10;

function swapper(&$x, &$y) {
    $z = $x;
    $x = $y;
    $y = $z;
}

echo "x = {$x} y = {$y} <br>";

swapper($x, $y);
echo "x = {$x} y = {$y} <br>";

echo "<hr>";

//4//
/* we raise each digit to the power of three and 
add them, we get: $$1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153$$*/
$number = 153;

function checkArmstrong($num) {
    $string = strval($num);
    $array = str_split($string);
    $array = array_map('intval', $array);

    $sumOfPower = 0;

    for ($count = 0; $count <= count($array) - 1 ; $count++) {
        
        $sumOfPower += $array[$count]**count($array);
        
    }
 
    if ($sumOfPower == $num) {
        echo "{$num} is Armstrong Number";
    } else {
        echo "{$num} is not Armstrong Number";
    }
}

checkArmstrong($number);


echo "<hr>";

//5//
$stringSample = "Eva, can I see bees in a cave?";

function reverseString($string) {
    $reveresedString = strrev($string);

    $reveresedString = strtolower($reveresedString);
    $filteredString = str_replace(array(',', '.', '?', '!', ' ', "'"), "", $reveresedString);

    return $filteredString;
}

function filterString($stringSample) {

    $filteredString = strtolower($stringSample);
    $filteredString = str_replace(array(',', '.', '?', '!', ' ', "'"), "", $filteredString);
    
    return $filteredString;
    
}

$result = reverseString($stringSample);
$stringSample = filterString($stringSample);

if ($result == $stringSample) {
    echo "Yes it is a palindrome";
} else {
    echo "No it is not a palindrome";
}

echo "<hr>";

//6//
$array1 = array(2, 4, 7, 4, 8, 4);

function removeDupe($array) {
    return  array_unique($array);
}


print_r(removeDupe($array1));

echo "<hr>";
?>