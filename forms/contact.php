<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$email_subject = $_POST['subject'];
$message = $_POST['message'];
$email_from = 'giriprasanth@gmail.com';

$email_body = "You have received a new message from the user $name.\n".
  "You have received a new message from the mail $visitor_email.\n".
  "and the subject: $email_subject.\n".
  "Here is the message:\n $message";

$to = "giriprasanth@gmail.com";

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

// Use a different function name to avoid conflicts with the built-in mail() function
$custom_mail = mail($to, $email_subject, $email_body, $headers);
if ($custom_mail) {
  echo "Your email has been sent!";
} else {
  echo "There was a problem sending your email.";
}
?>
