<?php 

require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';

connect(
    'localhost', //URL
    'world', //database
    'root', //username
    '' //password
);

$results = select('SELECT * FROM `countries` WHERE `population` > ?', [20000000], 'Country');
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>HTML 5 Boilerplate</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>
    <ul>
        <?php foreach ($results as $country) : ?>
            <li>
                <?= $country->name ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>