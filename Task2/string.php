<?php
//1//
$string = "Twinkle, twinkle, little star.";


$array = explode(", ", $string);

var_dump($array);

echo "<hr>";

//2//
$input = 'a';

$value = ord($input);

$nextValue = ($value == ord('z')) ? ord('a') : $value + 1;

$nextChar = chr($nextValue);

echo $nextChar;

echo "<hr>";

//3//
$originalString = 'The brown fox';

$insertString = 'quick';


$position = strpos($originalString, 'brown');


$modifiedString = substr_replace($originalString, $insertString . ' ', $position, 0);

echo $modifiedString. "<br>";

$firstWord = strtok($modifiedString, ' ');

echo $firstWord;

echo "<hr>";

//4//
$original = '0000657022.24';

$numberWithoutLeadingZeroes = ltrim($originalString, '0');

echo $numberWithoutLeadingZeroes;

echo "<hr>";

//5//
$originalString = 'The quick brown fox jumps over the lazy dog---';

$newString = rtrim($originalString, '-');

echo $newString;

echo "<hr>";

//6//
$string = 'The quick brown fox jumps over the lazy dog';


$wordsArray = explode(' ', $string);

$firstFiveWords = array_slice($wordsArray, 0, 5);

$result = implode(' ', $firstFiveWords);

echo $result;

echo "<hr>";

//7//
$numericString = '2,543.12';

$newNumber = str_replace(',', '', $numericString);

echo $newNumber;

echo "<hr>";
?>