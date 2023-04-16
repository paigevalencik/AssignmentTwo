<!DOCTYPE html>

<?php require('./headerandfooter/header.php'); 


if($_SESSION['emailType'] =="newAccount"){echo "New Account";}  




?>

<form method="post" action="send-email.php">
        <label for="name">Full Name</label>
        <input type="text" name="fullname" id="fullname" required>

        <label for="email">email</label>
        <input type="email" name="email" id="email" required>
        
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" required>
        
        <label for="message">Message</label>
        <textarea name="message" id="message" required></textarea>
        
        <br>
        
		<input type="submit" name="submitbutton" value="Submit">
    </form>

    <?php 



//if ($_SERVER["REQUEST_METHOD"] == "POST") {


//$_SESSION['name']=$name;
//$_SESSION['email']=$email;
//$_SESSION['subject']=$subject;
//$_SESSION['message']=$message;

//$name= $_POST['name'];
//$email= $_POST['email'];
//$subject= $_POST['subject'];
//$message= $_POST['message'];


?>




</html>

<?php require('./headerandfooter/footer.php'); ?>