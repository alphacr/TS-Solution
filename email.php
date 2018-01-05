<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];
$to = "info@tssolution.co.id";


$from="From: $name<$email>\r\nReturn-path: $email";
$subject="Message sent using your TSSolution Website Contact Form";
mail($to, $subject, $message, $from);


header("Location: contact.html");

?>