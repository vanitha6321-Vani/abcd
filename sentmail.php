<?php
if(isset($_POST['email'])){
    $userEmail = $_POST['email'];
    $userName = $_POST['name'];

    $to = $userEmail;
    $subject = "Welcome to Job Portal";
    $message = "Hello $userName, your registration is successful!";
    $headers = "From: no-reply@jobportal.com";

    if(mail($to, $subject, $message, $headers)){
        echo "Message sent to $userEmail!";
    } else {
        echo "Failed to send email.";
    }
}
?>
