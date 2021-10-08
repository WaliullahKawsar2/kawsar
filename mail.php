<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['emailaddress'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$to = "waliullahkawsar989328@mail.com";

$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n subject =" . $subject; . "\r\n Message =" . $message;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>