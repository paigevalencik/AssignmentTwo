<!DOCTYPE html>


<html>
    

<body>

<?php require('./headerandfooter/header.php');

session_start();

$_SESSION['title']=$title
$_SESSION['firstname']=$firstname
$_SESSION['lastname']=$lastname
$_SESSION['role']=$role

if ($_SESSION['role'] =="admin") {$_SESSION['emailType']="newAccount"; }

if ($_SESSION['role'] =="manager") {$_SESSION['emailType']="lostPassword"; }

if ($_SESSION['role'] =="ceo") {$_SESSION['emailType']="Needs help"; }

$title=$_POST['title'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$title=$_POST['role'];


?>


<h1> Welcome to Your IT Support System! </h1>

<form action="problem.php" method="post">
<select name ="persontitle" id="persontitle">
    <option value="mr">Mr</option>
    <option value="ms">Ms</option>
    <option value="mx">Mx</option>
    </select>

<input type="text" name="firstname" placeholder="First Name">

<input type="text" name="lastname"placeholder="Last Name">

<select name="role" id="role">
         <option value="Admin">Admin</option>   
         <option value="Manager">Manager</option>
         <option value="CEO">CEO</option>
        </select>

<input type="submit" name="submitbutton" value="Submit">
</form>



</div>




   
</body>



<?php 


require('./headerandfooter/footer.php'); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->


<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->

</html>
