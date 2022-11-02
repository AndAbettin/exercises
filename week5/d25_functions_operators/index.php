<?php 
//-------------
$my_name = "Aidan";
$height = 183;
var_dump($height);
var_dump($my_name);
//-------------

//-------------
function headline($text) {
    return "<h1>$text</h1>";
}
echo (headline("My Website"));
//-------------

//--------------
$inches = 12;
function inchesToCentimeters($number_of_inches) {
    $centimeter = $number_of_inches * 2.54;
    return $centimeter;
}
echo (inchesToCentimeters($inches));
echo "<br>";
//-------------

//-------------
$celsius = 100;
function celsiusToFahrenheit($temp_in_celsius) {
    $fahrenheit = $temp_in_celsius * (9/5) + 32;
    return $fahrenheit;
}
echo (celsiusToFahrenheit($celsius));
echo "<br>";
//-------------

//-------------
$temperature = 36.5;
function isHealthy($temp_given, $temp_type = 'c') {
    $healthy = 'true';
    if ($temp_type == 'f') { //convert fahrenheit to celsius
        $temp_given = ($temp_given - 32) * (5/9);
    }
    if ($temp_given > 37) { //no else needed because the options are binary
        $healthy = 'false';
    }
    return $healthy;
}
echo (isHealthy($temperature));
echo "<br>";
//-------------

//-------------
$number = 42;
function evenOrOdd($number_given) {
    return $number_given % 2 == 0 ? "even" : "odd";
}
echo (evenOrOdd($number));
echo "<br>";
//-------------

//-------------
$weekday = 'Thursday';
function sayWeekday($day) {
    echo 'Today is '. $day . '.';
}
sayWeekday($weekday);
echo "<br>";
//-------------

//-------------
$year_of_birth = 1995;
function sayBirthday($year_given) {
    $this_year = 2022;
    echo ("I was born in " . $year_given . " so this year I am celebrating my " . ($this_year - $year_given) . "th birthday.");
}
sayBirthday($year_of_birth);
echo "<br>";
//-------------

//-------------
function assessHeight($height_given) {
    if ($height_given >= 180) {
        return "tall";
    } elseif (180 > $height_given && $height_given >= 160) {
        return "average";
    } else {
        return "small";
    }
}
echo (assessHeight($height));
echo "<br>";
//-------------

//-------------
function getLanguageUsage($prog_language) {
    $prog_language = strtolower($prog_language);
    switch ($prog_language) {
        case $prog_language == 'php' || $prog_language == 'python' || $prog_language == 'ruby':
            return 'serverside';
            break;
        case $prog_language == 'javascript':
            return 'clientside';
            break;
        default:
            return "I don't know";
            break;
    }
}
echo (getLanguageUsage('node'));
echo "<br>";
echo (getLanguageUsage('javascript'));
echo "<br>";
echo (getLanguageUsage('ruby'));
echo "<br>";
echo (getLanguageUsage('python'));
echo "<br>";
echo (getLanguageUsage('php'));
echo "<br>";
//-------------

//-------------
echo (getLanguageUsage('PHP'));
echo "<br>";
echo (getLanguageUsage('php'));
echo "<br>";
echo (getLanguageUsage('Php'));
echo "<br>";
echo (getLanguageUsage('javascript'));
echo "<br>";
echo (getLanguageUsage('JavaScript'));
echo "<br>";
//-------------

//-------------
$age = 27;
$gender = 'male';
$employed = false;

if ($age < 25) {
    return "young";
}
if ($employed === true) {
    return "has a job";
}
if ($age > 34 && $employed === false) {
    return "bummer";
}
if ($age < 18) {
    return "minor";
}
if ($age < 12 && $gender === 'female') {
    return "little girl";
}
if ($age >= 18 && $employed === true) {
    return "get a job";
}
if ($age >= 60 &&  $employed === true && $gender === 'female') {
    return "get it girl";
}
if (($age > 20 && $gender === 'male') || ($age > 25 && $employed === false && $gender === 'female')) {
    return "this suggests nothing to me";
}


?>