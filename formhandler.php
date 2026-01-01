<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$fromMail = "prajapatikavy418@gmail.com";
$toMail = "kavyprajapati13@gmail.com";

$subject = " For Submitting Form";
$mailbody = " User's name : $name. \n ".
            "User's Email : $email. \n" . 
            "Subject : $subject. \n" . 
            "User Message : $message";



mail($toMail,$subject,$message);
header("location: contact.html");
?>