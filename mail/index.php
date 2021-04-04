<?php

    $to      = "vlastimir@hyperbrain.co";
    $subject = '[Subject]';
    $message = date("M,d,Y h:i:s A") . "\n";

    $headers  = "From: Test <vlastimir.dev@gmail.com>\n";
    //$headers .= "Cc: CC Test <vlastimir.dev@gmail.com>\n"; 
    $headers .= "X-Sender: Test <vlastimir.dev@gmail.com>\n";
    $headers .= 'X-Mailer: PHP/' . phpversion();
    $headers .= "X-Priority: 1\n"; 
    $headers .= "Return-Path: vlastimir.dev@gmail.com\n"; 
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message accepted";
    } else {
        echo "Error: Message not accepted";
    };
    
?>