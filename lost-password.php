<?php session_start() ?>

<!DOCTYPE html>

  <?php 
    require('./headerandfooter/header.php');
  ?>
  

    <form action="" method="post"> <!-- the form fields to fill in -->
      <br>
      <div class="form-input">
          <label for="name">Name</label>
          <input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required="">
      </div>
      <br>
      <div class="form-input">
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
      </div>
      <br>
      <div class="form-input">
        <label for="subject">Subject</label>
        <input type="text" name="subject" placeholder="Enter subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required="">
      </div>
      <br>
      <div class="form-input">
        <label for="message">Message</label>
        <textarea name="message" placeholder="Type your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
      </div>
      <br>
    
      <input type="submit" name="submit" class="btn" value="Submit">
    </form>

<?php

  include_once 'lost-password.php'; //submitting form to self


    // email configuration 
    $toEmail = 'admin@example.com'; 
    $fromName = 'Sender Name'; 
    $formEmail = 'sender@example.com'; 
 
    $postData = $statusMsg = $valErr = ''; 
    $status = 'error'; 
 
    // if the form is submitted get the following form data
    if(isset($_POST['submit'])){ 
        $postData = $_POST; 
        $name = trim($_POST['name']); 
        $email = trim($_POST['email']); 
        $subject = trim($_POST['subject']); 
        $message = trim($_POST['message']); 
     
        // form validation
        if(empty($name)){ 
         $valErr .= 'Please enter your name.<br/>'; 
        } 
        if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){ 
        $valErr .= 'Please enter a valid email.<br/>'; 
        } 
        if(empty($subject)){ 
        $valErr .= 'Please enter subject.<br/>'; 
        } 
        if(empty($message)){ 
        $valErr .= 'Please enter your message.<br/>'; 
        } 
     
        if(empty($valErr)){ 
        // sends email notification to the site admin 
            $subject = 'New contact request submitted'; 
           $htmlContent = " 
              <h2>Contact Request Details</h2> 
              <p><b>Name: </b>".$name."</p> 
              <p><b>Email: </b>".$email."</p> 
              <p><b>Subject: </b>".$subject."</p> 
              <p><b>Message: </b>".$message."</p>"; 
         
            // content type
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
            // header for sender info 
            $headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n"; 
         
            // Send email 
            @mail($toEmail, $subject, $htmlContent, $headers); 
         
            $status = 'success'; 
            $statusMsg = '<p style="color:#00008B ;"><br>Thank you! Your lost password request has submitted successfully, we will get back to you soon. </p>'; 
            $postData = ''; 
              }else{ 
                $statusMsg = '<p>Please fill all the mandatory fields:</p>'.trim($valErr, '<br/>'); 
              } 
      }


    if(!empty($statusMsg)){ ?>
      <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
      <?php } ?>

    
   <?php require('./headerandfooter/footer.php'); ?> 