<?php 

require_once 'DBBlackbox.php';

$id = $_GET['id'];
$song = find($id);

delete($song);

header('Location: index.php');
?>