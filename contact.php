<?php

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $email_from = "Medium Carlie";
    $email_subject = "You have a new submission form from Carlie's Angels";
    $email_body = "Name: $name.\n".
                    "Last Name: $lname.\n".
                    "Email Address: $email.\n". 
                    "Telephone Number: $number.\n". 
                    "Message: $message.\n";
    
    $to = "info@mediumcarlie.co.uk";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: ThanksContact");

    ?>