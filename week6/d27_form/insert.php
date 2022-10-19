<?php
require_once 'DBBlackbox.php';
$id = insert($_POST);

header('Location: edit.php?id='.$id);
?>