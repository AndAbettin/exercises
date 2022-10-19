<?php
session_start()
if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}
$_SESSION['success_message'] = 'Edit successful';
require_once 'DBBlackbox.php';
$id = $_GET['id'];
$song = find($id);
// var_dump($id)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Song</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>

    <a href="index.php">Home</a>

    <form action="update.php?id=<?=$id?>" method="POST">
        Song title: <br>
        <input type="text" name="song_name" value="<?= $song['song_name'] ?>">
        <br><br>
        Author: <br>
        <input type="text" name="song_author" value="<?= $song['song_author'] ?>">
        <br><br>
        Length: <br>
        <input type="text" name="song_length" value="<?= $song['song_length'] ?>">
        <br><br>
        Album: <br>
        <input type="text" name="song_album" value="<?= $song['song_album'] ?>">
        <br><br>
        <button>Submit Change</button>
    </form>
</body>




</html>