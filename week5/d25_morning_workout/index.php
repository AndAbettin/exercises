<?php
$variable = [
    [
    'fact' => 'The "dot" over the letter "i" is called a tittle.',
    'length' => 49,
    ],[
    'fact' => 'Women blink nearly twice as much as men.',
    'length' => 40
    ],[
    'fact' => 'A crocodile cannot stick its tongue out.',
    'length' => 40
    ],[
    'fact' => 'A dentist invented the electric chair.',
    'length' => 38
    ],[
    'fact' => 'TYPEWRITER is the longest word you can type using only the letters on one row of the keyboard',
    'length' => 93
    ],[
    'fact' => 'Nutmeg is extremely poisonous if injected intravenously.',
    'length' => 56
    ],[
    'fact' => 'A snail can sleep for three years.',
    'length' => 34
    ],[
    'fact' => 'No word in the English language rhymes with "MONTH."',
    'length' => 52
    ],[
    'fact' => 'The cigarette lighter was invented before the match.',
    'length' => 52
    ],[
    'fact' => 'The "pound" key on your keyboard (#) is called an octotroph.',
    'length' => 60
    ]
];
// https://catfact.ninja/fact
// var_dump($variable);
$rando =  rand(0,9);
// echo "<br><hr><br>";


echo json_encode($variable[$rando]);
?>