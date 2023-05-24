<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$location= $_POST['location']
$message= $_POST['Project-Details'];
$to = "aishik2024makur@gmail.com";
$subject = "New Query from Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Location = " . $location ."\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:confirmation.html");
?>