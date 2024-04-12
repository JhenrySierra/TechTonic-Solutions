<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Email address where you want to receive messages
    $to = "your_email@example.com";
    
    // Subject of the email
    $email_subject = "New message: $subject";
    
    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";
    
    // Send email
    if (mail($to, $email_subject, $email_content)) {
        echo "sent";
    } else {
        echo "error";
    }
} else {
    echo "Access denied";
}
?>
