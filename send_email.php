<?php
// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Set the recipient email address
$to = 'raheebabdulsalam@hotmail.com';

// Set the email subject
$emailSubject = 'New Contact Form Submission: ' . $subject;

// Build the email content
$body = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Subject: $subject\n";
$body .= "Message: $message\n";

// Set the email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Send the email
if (mail($to, $emailSubject, $body, $headers)) {
  echo 'Email sent successfully.';
} else {
  echo 'Sorry, there was an error sending your message.';
}
?>
