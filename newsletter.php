<?php

    $name = $_POST['name'];
    $email = $_POST['email'];

    $email_from = "Medium Carlie";
    $email_subject = "You have a new newsletter sign up";
    $email_body = "Name: $name.\n".
                    "Email Address: $email.\n";
    
    $to = "info@mediumcarlie.co.uk";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: ThanksNewsletter")

?>