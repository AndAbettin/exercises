<?php 
session_start()


require_once 'DBBlackbox.php';

$id = $_GET['id'];
$song = find($id);

// $song->name = 
// $song->author = 
// $song->length = 
// $song->album = 


$song['song_name'] = $_POST['song_name'];
$song['song_author'] = $_POST['song_author'];
$song['song_length'] = $_POST['song_length'];
$song['song_album'] = $_POST['song_album'];

update($id, $song);

$_SESSION['success_message'] = 'Saving successful';

header('Location: index.php')
?>