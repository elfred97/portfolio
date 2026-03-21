<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $to = "elfredtapar@gmail.com"; // change this
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $subject = $_POST['subject'] ?? '';
  $message = $_POST['message'] ?? '';

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";

  $full_message = "Name: $name\n";
  $full_message .= "Email: $email\n";
  $full_message .= "Subject: $subject\n\n";
  $full_message .= "Message:\n$message\n";

  if (mail($to, $subject, $full_message, $headers)) {
    echo "OK";
  } else {
    echo "Failed to send email.";
  }
}
?>