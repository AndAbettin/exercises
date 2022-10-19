<?php
    // is the current user administrator?
    $user_is_admin = false;
?>
 


 <?php if ($user_is_admin == true) : ?>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Eshop</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Link just for administrators</a></li>
        <li><a href="#">Another link just for administrators</a></li>
    </ul>
<?php elseif ($user_is_admin == false) : ?>
    <ul class="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">Eshop</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
<?php endif ; ?>

