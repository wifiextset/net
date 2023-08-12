<?php

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $model_number = $_POST["model_number"];
    
    $to = "shubhamthakur80661@gmail.com";  // Your email address

    $subject = "Extension Setup Form Submission";
    $message = "Full Name: $full_name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Model Number: $model_number\n";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
    header("Error Box.html");
?>
