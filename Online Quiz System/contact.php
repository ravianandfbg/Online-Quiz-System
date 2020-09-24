<?php
  $name = $_post['name'];
  $visitor_email=$_post['email'];
  $message=$_post['message'];


  $email_from='losofluvravi@gmail.com';
  $email_subject="New Form Submission";


  $email_body="User Name: $name.\n".
                 "User Email: $visitor_email.\n."
                     "User Message: $message.\n";


  $to="ravianandfbg@gmail.com";

  $headers= "From: $email_from \r\n";

 $headers.="Reply-To: $visitor_email \r\n";

 mail($to,$email_subject,$email_body,$headers);
 header("Location: contact.html")

 ?>