<?php
$fname = "Aidan";
$lname = "Aitchison";
echo "First name: {$fname}<br>Surname: {$lname}<br><hr>";


$yob = "1995";
$htinft = "6.0";
echo "Year of birth: {$yob}<br>Height: {$htinft} ft.<br><hr>";


define('SERVER_SOFTWARE', 'Apache');
define('MY_OS', 'Windows');
echo "This server is running on ";
echo SERVER_SOFTWARE;
echo ".<br><hr>";

echo "My operating system is ";
echo MY_OS;
echo ".<br><hr>";


function greetWorld()
{
    echo "Hello, World!<br><hr>";
}

function greeting($whom)
{
    return "Hello, {$whom}!<br><hr>";
}

function greet($whom)
{
    echo greeting($whom);
}


greetWorld();
greet($fname);
echo greeting($lname);
greet($lname);
?>