<?php $name = $-POST ['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="from: $name \n Message: $message";
$recipient = "ambuja.magaji@gmail.com";
$subject ="Contact Form";
$mailheader ="From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error");
echo "Thank You!";
?>

