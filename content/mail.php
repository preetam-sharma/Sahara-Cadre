<?php
    $from = "deepu855305@gmail.com";
    $to = "deepu855305@gmail.com";
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $email = $_POST['phone'];
    $name = $_POST['name'];
    $headers = "From: KCS <".$email."> \r\n";
// 'Cc: info@trutools.in'. "\r\n";
    
    $updated_message = "Name : ".$name. ", Email: ".$email.", Phone: ".$phone.", Message: ".$message;
    
    if(mail($to,$subject,$updated_message,$headers)){
        echo json_encode(['status'=>true]);
    }else{
        echo json_encode(['status'=>false]);
    }
?>
