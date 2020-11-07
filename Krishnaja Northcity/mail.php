<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$project = $_POST['project'];

$email_from = 'estatedeko.leads@gmail.com';

$Bcc = 'khaleel@odms.in';

$email_subject = "New enquiry";

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"Phone Number: $phone.\n".
"Location: $location.\n".
"Project: $project.\n";


$to = "estatedeko.leads@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Bcc: $Bcc \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location:thank-you.php");

?>
