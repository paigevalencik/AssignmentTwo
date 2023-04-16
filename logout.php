<?php
session_start ();

 require('./headerandfooter/header.php'); 
		

session_destroy(); ?>



<h1> You are logged out </h1>


<a href="index.php"> Back to homepage</a> 



 <?php require('./headerandfooter/footer.php'); ?>
