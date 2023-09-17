<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'healtether@gmail.com'; // Enter your email address here
    $subject = 'New Contact Form Submission';
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Thank you for contacting us. We will get back to you soon!</p>';
    } else {
        echo '<p>Oops! Something went wrong. Please try again later.</p>';
    }
}
?>