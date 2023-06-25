<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "support@onescribe.app";
  $subject = "New Notify Me Submission";
  $email = $_POST["email"];
  $name = $_POST["name"];
  $message = "A user has submitted the Notify Me form:\n\nName: $name\nEmail: $email";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
  } else {
    echo "Email sending failed!";
  }
}
?>
