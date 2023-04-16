<?php require('./headerandfooter/header.php'); 
	

if($_SESSION['emailType'] =="lostPassword"){echo "Lost Password";}  ?>


<form method="post" action="send-email.php">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>
        
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
        
        <br>
        
        <input type="submit" name="submitbutton" value="Submit">
    </form>



<?php require('./headerandfooter/footer.php'); ?>