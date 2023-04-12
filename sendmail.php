<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    
    $to = "youremail@example.com";
    $subject = "New message from $name";
    $body = "From: $name\nEmail: $email\nMessage: $message";
    
    if (mail($to, $subject, $body)) {
        echo "Thank you for your message!";
    } else {
        echo "There was a problem sending your message.";
    }
}
?>
