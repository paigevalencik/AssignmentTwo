<?php

    session_start ();

    require('./headerandfooter/header.php'); 

    session_destroy();
?>

<!DOCTYPE html>


    <h2> You are logged out </h2>


    <a href="index.php"> Back to homepage</a> 






 <?php 

    require('./headerandfooter/footer.php'); 

 ?>
