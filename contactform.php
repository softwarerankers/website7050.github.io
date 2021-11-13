<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $email_from = 'dssharma9803@gmail.com';
  $email_subject = "New Form Submission";
  $email_body = "User Name : $name.\n".
                "User Email : $email.\n".
                "User Number : $phone.\n".
                "Message : $message.\n";

  $to = "fakeds983@gmail.com"

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location : index.html");

?>