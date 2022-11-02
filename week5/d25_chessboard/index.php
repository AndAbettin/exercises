<?php 



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chessboard</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>

</head>

<body>
    <div class="board">

    <?php for ($i = 0; $i < 8; $i++) : ?> 
        <!-- Begins row loop -->
        <div class="row row<?= $i+1 ?>">

        <?php for ($j = 0; $j < 8; $j++) : ?>
            <!-- Builds columns for the row -->
            <?php $total = $i + $j; ?>
            <!-- Controls whether row is white or black first -->
            <!-- i=0 and j=0 means row will be white first -->
            <?php if ($total % 2 == 0) :?>

                <div class="white <?= chr(72 - $j) ?><?= $i+1 ?>"></div>

            <?php elseif ($i == 3 && $j == 6) : ?>

                <div class="black <?= chr(72 - $j) ?><?= $i+1 ?>">
                    <img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png" alt="King">
                </div>
                
            <?php elseif ($i == 7 && $j == 2) : ?>

                <div class="black <?= chr(72 - $j) ?><?= $i+1 ?>">
                    <img src="https://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png" alt="Queen">
                </div>

            <?php else : ?>

                <div class="black <?= chr(72 - $j) ?><?= $i+1 ?>"></div>

            <?php endif ; ?>
        <?php endfor ; ?>

        </div>

    <?php endfor ; ?>

    </div>
</body>

</html>