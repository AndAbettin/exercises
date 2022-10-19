<?php
// @TODO no.1 replace following functions with only one more general function.
// have you heard about DRY principal? DRY stands for don't repeat yourself
// if you don't know the syntax for modulo operator, you can check it at https://www.php.net/manual/en/language.operators.arithmetic.php
// think of the name for the new function

function multipleOf($number)
{
    $multof = array(
        'mult3'=>false,
        'mult5'=>false,
        'mult8'=>false,
        'mult15'=>false
    );

    if ($number % 3 == 0) 
    {
        if ($number % 5 == 0)
        {
            $multof['mult5'] = true;
            $multof['mult15'] = true;
        }
        $multof['mult3'] = true;
    }
    if ($number % 8 == 0)
    {
        $multof['mult8'] = true;
    }
    return $multof;
}

$myNumber = 15;

$myNumberIsMultipleOf = MultipleOf($myNumber);
var_dump($myNumberIsMultipleOf);
echo '<br><hr>';



// @TODO no.2
function greatestDivisor($number)
{
    // Implement this function which will give you the greatest divisor for any positive number.
    // Do not return 1 or the number itself. if the number is prime number, return null.
    // For example for number 3 you should return null, for number 8 you should return 4.
    $greatest = null;
    for ($i = 2; $i < ($number / 2); $i++)
    {
        if ($number % $i == 0)
        {
            $greatest = $i;
        }
    }
    return $greatest;
}

echo('number 3 is ' . (greatestDivisor(3) ?? 'prime number'));
echo ('<br />');
echo('number 8 is ' . (greatestDivisor(8) ?? 'prime number'));
echo ('<br />');
echo('number 15 is ' . (greatestDivisor(15) ?? 'prime number'));
echo ('<br />');
echo('number 99 is ' . (greatestDivisor(99) ?? 'prime number'));
echo ('<br />');
echo('number 100 is ' . (greatestDivisor(100) ?? 'prime number'));
echo ('<br /><hr>');
echo ('<br />');



// @TODO no.3 Fix the bugs! Try to make code as good and as readable as possible, formatting is up to you, but please clean up this mess.
// Here is dynamically generated two dimensional array representing chess board.
// Values of nested array should be 0 or 1 representing white or black.

$board = [];

for ($i = 0; $i < 8; $i++) 
{
    $row = [];
    for ($j = 0; $j < 8; $j++) 
    {
        if ($i % 2 == 0) 
        {
            $row[] = ($j % 2 ) === 0 ? 0 : 1;
        } else
        {
            $row[] = ($j % 2 ) === 0 ? 1 : 0;
        }
    }
    $board[] = $row;
}



// @TODO no.4 You can use html template with some css to display good looking chessboard. Use grid, flex or any other approach.
echo ('<div class="board">');

foreach ($board as $row) {
    echo ('<div class="row">');

    foreach ($row as $square) {
        if ($square == 1)
        {
            echo ('<div class="square black">' . $square . '</div>');
        } else
        {
            echo ('<div class="square white">' . $square . '</div>');
        }

    }

    echo ('</div>');
}

echo ('</div>');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Morning Workout</title>
    <style>
        .board {
            height: 800px;
            width: 800px;
        }
        .row {
            display: flex;
            flex-flow: row nowrap;
            height: 12.4%;
            width: 100%;
        }
        .square {
            height: 100%;
            width: 12.4%;
            border: 1px solid black;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
            color: white;
        }
    </style>

</head>

<body>

</body>

</html>