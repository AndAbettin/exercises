<?php
require_once 'DBBlackbox.php';
$songs = select();
// var_dump($songs);

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Song List</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <style>
    th, td {
        border: 2px, solid;
        padding: 10px;
    }
  </style>
</head>

<body>

    <a href="create.php">Add a New Song</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Song Title</th>
                <th>Author</th>
                <th>Length</th>
                <th>Album</th>
                <th></th>
                <th></th>
            <tr>
        </thead>
        <tbody>
            <?php foreach ($songs as $song) : ?>
                <tr>
                    <td><?= $song['id'] ?></td>
                    <?php $song_id = $song['id'] ?>
                    <td><?= $song['song_name'] ?></td>
                    <td><?= $song['song_author'] ?></td>
                    <td><?= $song['song_length'] ?></td>
                    <td><?= $song['song_album'] ?></td>
                    <td><a href="edit.php?id=<?=$song_id?>">EDIT</a></td>
                    <td><a href="delete.php?id=<?=$song_id?>">DELETE</a></td>           
                </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</body>

</html>