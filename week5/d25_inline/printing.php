<?php
$title = 'Inline PHP practice';

$vehicles = [
    'Bicycle' => 50,
    'Car' => 150,
    'Train' => 110
];

$messages = [
    'Preparing to do some stuff...',
    'Doing amazing stuff...',
    'Stuff is done.'
];

// $messages = []
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>
    <h1><?= $title ?></h1>
    <table>
    <?php foreach ($vehicles as $key => $value) : ?>
        <tr>
            <th>Means of transport</th>
            <th>Max. speed (km/h)</th>
        <tr>
        <tr>
            <td><?= $key ?></td>
            <td><?= $value ?></td>
        </tr>
    <?php endforeach ; ?>
    </table>

    <?php if ($messages == true) : ?>
    <ul class="messages" style="padding: 1em; border: 1px solid black; margin: 1em;">
    <?php foreach ($messages as $value) : ?>
    <li><?= $value ?></li>
    <?php endforeach ; ?>
    <?php endif ; ?>
</ul>
</body>

</html>