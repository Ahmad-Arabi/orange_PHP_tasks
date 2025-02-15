<?php
//1//
$number1 = 10;
$number2 = 10;
$sum = $number1 + $number2;

if ($sum == 30) {
    echo $sum;
} else {
    echo "false";
}

echo "<hr>";

//2//
$number = 3;

if (abs($number) % 3 == 0) {
    echo "True";
} else {
    echo "False";
}

echo "<hr>";

//3//
$number = 50;

if ( $number >= 20 && $number <= 50) {
    echo "True";
} else {
    echo "False";
}

echo "<hr>";

//4//
$array = array(1, 5, 9);
sort($array);
echo array_pop($array);

echo "<hr>";

//5//
$unit = 20;

if ($unit <= 50) {
    $bill = 2.5 * $unit;
    echo "The bill is {$bill} JOD";
} elseif ($unit  > 50 && $unit <= 150) {
    $bill = 5 * $unit;
    echo "The bill is {$bill} JOD";
} elseif ($unit  > 150 && $unit <= 250) {
    $bill = 6.2 * $unit;
    echo "The bill is {$bill} JOD";
} else {
    $bill = 7.5 * $unit;
    echo "The bill is {$bill} JOD";
}

echo "<hr>";

//6//
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Question 6</p>
    <form action="logicaloperators.php" method="post">
        <label for="number1">First Number:</label> <br>
        <input type="text" name="number1"> <br>
        <label for="number2">Second Number:</label> <br>
        <input type="text" name="number2"> <br>
        <label for="">Operation:</label> <br>
        <select name="operation" id="operation">
            <option value="add" name="add">Addition</option>
            <option value="sub" name="sub">Subtraction</option>
            <option value="multiply" name="multiply">Multiplication</option>
            <option value="divide" name="divide">Division</option>
        </select> <br>
        <input type="submit" name="submit"> <br>
        <?php 
        $number1 = intval($_POST["number1"]);
        $number2 = intval($_POST["number2"]);
        $operation = isset($_POST["operation"]) ? $_POST["operation"] : null;
        
        if (isset($_POST["submit"])) {
            switch ($operation) {
                case "add":
                    $result = $number1+$number2;
                    echo "The result is {$result}";
                    break;
                case "sub":
                    $result = $number1-$number2;
                    echo "The result is {$result}";
                    break; 
                case "multiply":
                    $result = $number1*$number2;
                    echo "The result is {$result}";
                    break;    
                case "divide":
                    $result = $number1/$number2;
                    echo "The result is {$result}";
                    break;    
            }       
        }
        echo"<hr>";
        ?>
        
    </form>
    
</body>
</html>
<?php
//7//
$age = 15;

if ($age >= 18) {
    echo "You are eligible to vote.";
} else {
    echo "You are ineligible to vote.";
}

echo"<hr>";

//8//
$number = -60;

if ($number == 0)  {
    echo "Zero";
} elseif (abs($number) == $number)  {
    echo "Positive";
} else {
    echo "Negative";
}

echo"<hr>";

//9//
$grades = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
$averageGrades = array_sum($grades) / count($grades); 

if ($averageGrades <= 60) {
    echo "F";
} elseif ($averageGrades <= 70) {
    echo "D";
} elseif ($averageGrades <= 80) {
    echo "C";
} elseif ($averageGrades <= 100) {
    echo "A";
} else {
    echo "Please enter the grades correctly";
}

echo"<hr>";
?>