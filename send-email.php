<?php require('./headerandfooter/header.php'); 




if($_SESSION['emailType'] =="lostPassword"){echo "Lost Password";}  
if($_SESSION['emailType'] =="newAccount"){echo "New Account";} 
		



 require('./headerandfooter/footer.php'); ?>
