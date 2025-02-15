<?php
//1//
$String = "hello world! PHP is awesome.";

$uppercaseString = strtoupper($String);
echo "Uppercase: " . $uppercaseString . "<br>";

$lowercaseString = strtolower($String);
echo "Lowercase: " . $lowercaseString . "<br>";

$ucfirstString = ucfirst($String);
echo "First letter uppercase: " . $ucfirstString . "<br>";

$ucwordsString = ucwords($String);
echo "First letter of each word capitalized: " . $ucwordsString . "<br>";

echo "<hr>";

//2//
$number = '085119';

$hours = substr($number, 0, 2);
$minutes = substr($number, 2, 2);
$seconds = substr($number, 4, 2);


$dateFormat = $hours . ':' . $minutes . ':' . $seconds;

echo $dateFormat ;

echo "<hr>";

//3//
$sentence = 'I am a full stack developer at orange coding academy';
$searchWord = 'Orange';

$sentenceLower = strtolower($sentence);
$wordLower = strtolower($searchWord);


if (strpos($sentenceLower, $wordLower)) {
    echo 'Word Found!';
} else {
    echo 'Word Not Found!';
}   
echo "<hr>";

//4//
$url = 'www.orange.com/index.php';

$fileName = basename($url);

echo $fileName;

echo "<hr>";

//5//
$email = 'info@orange.com';


$username = strstr($email, '@', true);

echo $username;

echo "<hr>";

//6//
$email = 'info@orange.com';


$last = substr($email, -3);

echo $last;

echo "<hr>";

//7//
$characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

function generatePassword($length = 8, $characters) {
    $password = '';
    $charactersLength = strlen($characters);
    
    for ($i = 0; $i < $length; $i++) {
        $index = mt_rand(0, $charactersLength - 1); 
        $password .= $characters[$index];
    }
    
    return $password;
}

$password = generatePassword(rand(6, 12), $characters);
echo $password;

echo "<hr>";

//8//
$sentence = 'That new trainee is so genius.';
$replacementWord = 'the';

// Use preg_replace to replace the first word in the sentence
$modifiedSentence = preg_replace('/^\w+/', $replacementWord, $sentence);

echo $modifiedSentence;

echo "<hr>";
?>