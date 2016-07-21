



<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");


 


if(isset($_POST['submit'])){
    $to = "jerrytinney@icloud.com"; 
    $from = $_POST['your_email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form completion";
   
   
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
  

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you for your time " . $first_name . ", we will contact you shortly.";
    
   } 

