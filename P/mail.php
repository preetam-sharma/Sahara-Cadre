<?php
    $from = "info@trutools.in";
    $to = "export@trutools.in";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $headers = "From: Trutools <info@trutools.in> \r\n";
// 'Cc: info@trutools.in'. "\r\n";
    
    $updated_message = "Name : ".$name. ", Email: ".$email.", Message: ".$message;
    
    mail($to,$subject,$updated_message,$headers);
    return true;
?>