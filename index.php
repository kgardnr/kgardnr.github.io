<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Resume';
    $to = 'kgardnr@gmail.com';
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit']) {
      if (mail ($to, $subject, $body, $from)) {
          echo '<p>Thank you for getting in touch! Redirecting you back to my resume...</p> <meta http-equiv="refresh" content="3; url=http://www.kimgardner.com/resume/index.html">';
      } else {
          echo '<p>Sorry, something went wrong :( Please try again! </p> <meta http-equiv="refresh" content="3; url=http://www.kimgardner.com/resume/index.html">';
      }
    }
?>
