



<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");





if(isset($_POST['submit'])){
    $to = "portsturn150@gmail.com"; 
    $from = $_POST['your_email']; 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form completion";
    $subject2 = "Copy of your form";
    $output_form= false;

    if (empty($first_name) && empty($last_name)){
        echo '<p style="color:red;font-size:30px">You forgot your first and last names !!</p>';
        $output_form= true;
    }
    if (!empty($first_name) && empty($last_name)) {
        echo '<p style="color:red;font-size:30px">You forgot your last name!!</p>';
        $output_form= true;
    } 


    if (empty($first_name) && !empty($last_name)) {
        echo '<p style="color:red;font-size:30px">You forgot your first name!!</p>';
        $output_form= true;
    }

    

    
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); 
    echo "Mail Sent. Thank you for your time " . $first_name . ", we will contact you shortly.";
    $output_form = true;
    
}
