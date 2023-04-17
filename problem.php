<?php

session_start();

	require('./headerandfooter/header.php'); 

		if ($_SERVER["REQUEST_METHOD"] == "POST") {

    		if(isset($_POST['role'])) {
				echo "<br><br>Hello  {$_POST['role']} <br><br>" ;

				if ($_POST['role']=="Admin")
	 				{echo  "<a href='new-account.php'>New Account</a>
		 				<br> <br>
		  				<a href='isnt-working.php'>Having Tech Issues</a>";} 

				if ($_POST['role']=="Manager")
		  			{echo "<a href='lost-password.php'>Lost My Password</a>
			  			<br> <br> 
			   			<a href='isnt-working.php'>Having Tech Issues</a>";} 

   				if ($_POST['role']=="CEO")
			   		{echo "<a href='need-help.php'>Phone Number</a>
				   		<br> <br>
						<a href='isnt-working.php'>Having Tech Issues</a>";} 
	 		}
	
		}
	
		
require('./headerandfooter/footer.php');?>
