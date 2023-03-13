<?php
$fname=$_POST['Fname'];
$lname=$_POST['Lname'];
$email=$_POST['email'];
$message=$_POST['message'];

// mail(to,subject,body,header)
$from='naatukaai.com'
$to='adamantium.sarwan@gmail.com';
$body="First Name:$Fname.\n".
       "Last Name:$Lname.\n".
       "Email:$email.\n".
       "message:$message.\n";
       $headers="from:".$from.
                 "Reply-To:".$email;
                mail($to,$subject,$body,$headers);
 header(Location:contact.html);
?>
