<?php

require_once 'lib/DBBlackbox.php';
require_once 'Comment.php';
require_once 'Session.php';

session_start();

$valid = true;
$errors = [];

if (empty($_POST['username'])) { // set valid to false, log an error in errors array
    $valid = false;
    $errors['username'] = 'The name cannot be left empty';
}
if (false === filter_var($_POST['email_address'], FILTER_VALIDATE_EMAIL)) { // set valid to false, log error
    $valid = false;
    $errors['email_address'] = 'The email address is not valid';
}
if (empty($_POST['comment_text'])) { // set valid to false, log error
    $valid = false;
    $errors['comment_text'] = 'Comment field empty';
}
if ($valid === false) { //add errors to a key of session global, save entered data, then break
    $_SESSION['error_messages'] = $errors;
    $_SESSION['old_data'] = $_POST;

    header('Location: index.php');
    exit();
}

$comment = new Comment;
$data = $_POST;
$comment->username = $data['username'];
$comment->email_address = $data['email_address'];
$comment->comment_text = $data['comment_text'];

insert($comment); // this is what actually adds data to the database

Session::instance()->set('success_message', 'Comment made successfully!');

header('Location: index.php'); // returns to home page

?>