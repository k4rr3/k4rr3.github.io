<?php
// Get form field values
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email information
$to = 'davidcarreras2003@gmail.com'; // Replace with your email address
$subject = 'New Contact Form Submission';
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$messageBody = "Name: $name\n\nEmail: $email\n\nMessage: $message";

// Send email
if (mail($to, $subject, $messageBody, $headers)) {
    // Email sent successfully
    echo '<p>Thank you for your message. We will get back to you soon.</p>';
} else {
    // Failed to send email
    echo '<p>Sorry, there was an error sending your message. Please try again later.</p>';
}
?>
