<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $website = $_POST['website'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // Set up the recipient email address
  $to = "sborcheni@gmail.com";

  // Set up the email subject
  $email_subject = "New Contact Form Submission";

  // Build the email content
  $email_body = "Name: $name\n";
  $email_body .= "Email: $email\n";
  $email_body .= "Website: $website\n";
  $email_body .= "Subject: $subject\n";
  $email_body .= "Message:\n$message";

  // Set up the email headers
  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  // Send the email
  if (mail($to, $email_subject, $email_body, $headers)) {
    // Email sent successfully
    echo "Thank you for contacting us. Your message has been sent.";
  } else {
    // Error sending email
    echo "Sorry, an error occurred while sending your message. Please try again later.";
  }
}
?>
