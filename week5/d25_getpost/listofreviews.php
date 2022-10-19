<?php
require_once 'DBBlackbox.php';
$reviews = select();
// var_dump($reviews);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Review List</title>
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
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Film Title</th>
                <th>Review Text</th>
                <th>Rating</th>
            <tr>
        </thead>
        <tbody>
            <?php foreach ($reviews as $review) : ?>
                <tr>
                    <td><?= $review['id'] ?></td>
                    <td><?= $review['movie_title'] ?></td>
                    <td><?= $review['review_text'] ?></td>
                    <td><?= $review['rating'] ?></td>
                </tr>
            <?php endforeach ; ?>
        </tbody>
    </table>
</body>

</html>