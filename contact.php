<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $_email_from = 'nicksontarus91@gmail.com';
    $_email_subject = 'enquiry';

    $_email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\.".;

    $to = "tarusjohn96@gmail.com";
    $headers = "From: $_email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    $mail($to,$_email_subject,$_email_body,$headers);

    header(Location: index.html);

?>