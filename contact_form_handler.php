<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "engrshaniii@gmail.com"; // Replace with your email address
  $subject = "New Form Submission";
  $message = "";

  // Build the email message
  foreach ($_POST as $key => $value) {
    $message .= $key . ": " . $value . "\n";
  }

  // Send the email
  mail($to, $subject, $message);

  // Redirect back to the form page or show a success message
  header("Location: thank_you_page.html");
  exit;
}
?>
 