<?php
$cars_i_want = [];

// array_push($cars_i_want, "Aston Martin", "Bugatti", "Ferrari", "Lamborghini", "Maserati", "Mercedes", "Porsche", "Skoda");
$cars_i_want[] = "Aston Martin";
$cars_i_want[] = "Bugatti";
$cars_i_want[] = "Ferrari";
$cars_i_want[] = "Lamborghini";
$cars_i_want[] = "Maserati";
$cars_i_want[] = "Mercedes";
$cars_i_want[] = "Porsche";
$cars_i_want[] = "Skoda";

echo "For myself I would buy {$cars_i_want[1]}. <br><hr>";
echo "For my spouse I would buy {$cars_i_want[3]}. <br><hr>";
$cars_i_want[4] = "Smart";
echo "Each of my kids will get a {$cars_i_want[4]} car. <br><hr>";


var_dump($cars_i_want);

?>