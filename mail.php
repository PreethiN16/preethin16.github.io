<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $recipient = "YOUREMAIL@HERE.COM";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail(preethin.ee17@bmsce.ac.in, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
