<?php
require_once 'DBBlackbox.php';
$review_id = $_GET['id'];
$review = find($review_id);
// var_dump($review)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Movie Review</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>

    <form action="savereview.php" method="POST">
        Movie title: <br>
        <input type="text" name="movie_title" value="<?= $review['movie_title'] ?> ">
        <br><br>
        Review text: <br>
        <textarea name="review_text" cols="30" rows="10"><?= $review['review_text'] ?></textarea>
        <br><br>
        Rating: <br>
        <input type="range" name="rating" min="0" max="10" value="<?= $review['rating'] ?> ">
        <br><br>
        <button>Submit review</button>
    </form>
</body>

</html>