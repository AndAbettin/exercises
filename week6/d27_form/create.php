<?php
require_once 'DBBlackbox.php';
require_once 'Session.php'

$session = Session::instance();
var_dump($session)
// $review_id = $_GET['id'];
// $review = find($review_id);
// var_dump($review)
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add a Song</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>

    <form action="insert.php" method="POST">
        Song Name: <br>
        <input type="text" name="song_name">
        <br><br>
        Author: <br>
        <input type="text" name="song_author">
        <br><br>
        Length: <br>
        <input type="text" name="song_length">
        <br><br>
        Album: <br>
        <input type="text" name="song_album">
        <br><br>
        <button>Submit Song</button>
    </form>
</body>

</html>