<!DOCTYPE html>


<html>
    

<body>

<?php 

session_start();

require('./headerandfooter/header.php');







if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title= $_POST['title'];
    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $role= $_POST['role'];
    $submitbutton= $_POST['submitbutton'];



$_SESSION['title']=$title;
$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;
$_SESSION['role']=$role;
$_SESSION['submitbutton']=$submitbutton;



if ($_SESSION['role'] =="admin") {$_SESSION['emailType']="newAccount"; }

if ($_SESSION['role'] =="manager") {$_SESSION['emailType']="lostPassword"; }

if ($_SESSION['role'] =="ceo") {$_SESSION['emailType']="Needs help"; }
    
}
    
    
    
    
    ?>





<h1> Welcome to Your IT Support System! </h1>

<form action="problem.php" method="post">
<select name ="title" id="persontitle">
    <option value="mr">Mr</option>
    <option value="ms">Ms</option>
    <option value="mx">Mx</option>
    </select>

<input type="text" name="firstname" placeholder="First Name">

<input type="text" name="lastname"placeholder="Last Name">

<select name="role" id="personrole">
         <option value="Admin">Admin</option>   
         <option value="Manager">Manager</option>
         <option value="CEO">CEO</option>
        </select>

<input type="submit" formmethod="post" name="submitbutton" value="Submit">
</form>



</div>



   
</body>



<?php 


require('./headerandfooter/footer.php'); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->


<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->

</html>
