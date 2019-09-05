<?php
session_start();
if(@$_SESSION['uid']){
    echo "Hello";
    ?>
    <a href="logout.php" class="btn btn-primary">LogOut</a>
    <?php
}
else
header('location:login.php');
?>