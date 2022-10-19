<?php

require_once 'lib/DBBlackbox.php';
require_once 'Comment.php';
require_once 'Session.php';

session_start();

$comments = select(null, 0, 'Comment');

if (isset($_SESSION['success_message'])) { // if session has success messages, flash them
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}
if (isset($_SESSION['error_messages'])) { // if session has errors, flash them
    $error_messages = $_SESSION['error_messages'];
    unset($_SESSION['error_messages']);
}
if (isset($_SESSION['old_data'])) { // if session has old info, flash it
    $old_data = $_SESSION['old_data'];
    unset($_SESSION['old_data']);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Disney buys Star Wars maker Lucasfilm from George Lucas | BBC News</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <article>

        <div class="img">
            <img src="img/article.jpg" alt="Disney buys Star Wars maker Lucasfilm from George Lucas">
        </div>

        <h1>Disney buys Star Wars maker Lucasfilm from George Lucas</h1>

        <p class="story">Disney is buying Lucasfilm, the company behind the Star Wars films, from its chairman and founder George Lucas for $4.05bn (£2.5bn).</p>

        <p>Mr Lucas said: "It's now time for me to pass Star Wars on to a new generation of film-makers."</p>

        <p>In a statement announcing the purchase, Disney said it planned to release a new Star Wars film, episode seven, in 2015.</p>

        <p>That will be followed by episodes eight and nine and then one new movie every two or three years, the company said.</p>

    </article>

    <div class="comments">
        <h2>Comment below:</h2><br>

        <?php if (!empty($error_messages)) : ?> <!-- if errors, print to screen -->
            <?php foreach ($error_messages as $error) : ?>
                <div class="error">
                    <?= $error ?>
                </div>
            <?php endforeach ; ?>
        <?php endif ; ?>

        <?php if (!empty($success_message)) : ?> <!-- if success, print to screen -->
            <div class="success">
                <?= $success_message ?>
            </div>
        <?php endif ; ?>

        <form action = "handle-form.php" method="POST">
            <div class="indicators">
                <label for="username">Name:</label><br>
                <input 
                    type="text"
                    name="username"
                    value="<?= htmlspecialchars(  $old_data['username'] ?? '') ?>"
                ><br>

                <label for="email_address">Email Address:</label><br>
                <input 
                    type="text" 
                    name="email_address"
                    value="<?= htmlspecialchars(  $old_data['email_address'] ?? '') ?>"
                ><br>
            </div>

            <div class="body">
                <label for="comment_text">Comment:</label><br>
                <textarea type="text" name="comment_text" rows="5" columns="50">
                    <?= htmlspecialchars(  $old_data['comment_text'] ?? '') ?>
                </textarea><br>
                
                <button>Submit</button>
            </div>
        </form>


        <?php foreach($comments as $comment) : ?>
            <div class="comment">
                <h6><?= $comment->username ?></h6>
                <p><?= $comment->comment_text ?></p>
            </div>
        <?php endforeach ?>

    </div>

</body>
</html>