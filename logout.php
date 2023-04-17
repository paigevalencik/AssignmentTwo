<?php

    session_start ();
    require('./headerandfooter/header.php'); 
    session_destroy(); //destroying the session
?>

<!DOCTYPE html>

    <h2> You are logged out </h2>

    <a href="index.php"> Back to homepage</a> <!-- link back to homepage -->

 <?php
    require('./headerandfooter/footer.php'); 
 ?>
