<?php require('./headerandfooter/header.php'); 



if (isset($_SESSION['role'])) {
	echo "Hello: {$_SESSION['role']";

	}

if(isset($POST['submitbutton'])) {
    
	
	if ($_POST['role']=="admin")
	 {echo  "<a href='new-account.php>New Account</a>
		 <br>
		  <href=isnt-working.php'>Having Tech Issues</a>";} 

	if ($_POST['role']=="manager")
		  {echo "<a href='lost-password.php>Lost My Password</a>
			  <br>
			   <href=isnt-working.php'>Having Tech Issues</a>";} 

   if ($_POST['role']=="ceo")
			   {echo "<a href='need-help.php>Phone Number</a>
				   <br>
					<href=isnt-working.php'>Having Tech Issues</a>";} 





	 }
	
	
	






		
require('./headerandfooter/footer.php');



?>
