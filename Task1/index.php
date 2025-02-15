<?php
//1//
$colors = array('white', 'green', 'red');

echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
echo "</ul>";

echo "<hr>";
//2//
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

foreach ($cities as $country => $capital) {

    echo "The capital of {$country} is {$capital} <br><br>";
}

echo "<hr>";

//3//
$color = array (4 => 'white', 6 => 'green', 11=> 'red');

echo $color["4"];

echo "<hr>";

//4//
$sample = array(1, 2, 3, 4, 5);

$sample1 = array_slice($sample, 0, 3);
$sample2 = array_slice($sample, 3, 5);

array_push($sample1, "$");

$result = array_merge($sample1, $sample2);

foreach ($result as $value) {
    echo "{$value} ";
};

echo "<hr>";

//5//
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
array_reverse($fruits);

foreach ($fruits as $letter => $fruit) {
    echo "{$letter} = {$fruit} <br>";
}

echo "<hr>";

//6//
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
 65, 64, 68, 73, 75, 79, 73);



$avgTemperature = array_sum($temperatures)/count($temperatures);
$avgTemperature = round($avgTemperature,1);

sort($temperatures);
$highestTemps = array_slice($temperatures, 0, 6);
$lowestTempes = array_slice($temperatures, -7);


echo "Average Temperature is: {$avgTemperature} <br>";

echo "List of seven lowest temperatures: ". implode( ", " , $lowestTempes) . "<br>";
echo "List of seven highest temperatures: ". implode( ", " , $highestTemps) . "<br>";
 
echo "<hr>";

//7//
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

$mergedArray = array_merge($array1, $array2);

print_r($mergedArray);

echo "<hr>";

//8//
$colors = array("red","blue", "white","yellow");
$colorsUpper = array_map('strtoupper', $colors);
print_r($colorsUpper);

echo "<hr>";
?>