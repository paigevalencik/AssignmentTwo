



    -> button to logout.php
    form -> send values to form.php



<!DOCTYPE html>

<?php 


//if ($_POST['select']){
   //header("Location: ".$_POST['select']);
//}

//$title = $_POST["title"];
//$firstname= $_POST["firstname"];
//$lastname= $_POST["lastname"];
//$role= $_POST["role"];

?>



<html>


<head>
  <meta charset="utf-8">
  <title>Halifax Canoe and Kayak</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png"
      href="https://raw.githubusercontent.com/Zulinov/skillsProjects/main/paddle-white.png"> <!-- the favicon-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--the stylesheet for my navigation menu-->
  <link rel="stylesheet" href="styles.css">  <!--my own css stylesheet-->


</head>

<body>

<?php require('./headerandfooter/header.php'); ?>


<h1> Welcome to Your IT Support System! </h1>

<form action="problem.php" method="post">
<select name ="persontitle" id="persontitle">
    <option value="mr">Mr</option>
    <option value="ms">Ms</option>
    <option value="mx">Mx</option>
    </select>
<input type="text" name="firstname" placeholder="First Name">
<input type="text" name="lastname"placeholder="Last Name">
<select name="role">
         <option value="Admin">Admin</option>   
         <option value="Manager">Manager</option>
         <option value="CEO">CEO</option>
        </select>
<input type="submit" value="Submit">
</form>



</div>


   
</body>

<?php require('./headerandfooter/footer.php'); ?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> <!--jquery for the menu-->


<script type="text/javascript" src="script.js"></script> <!-- jquery for the click for the menu-->

</html>
