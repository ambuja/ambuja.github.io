<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$message = $_POST ['message'];

mail("ambuja.magaji@gmail.com", "Contact from the site" ,$message, "From: $email\r\n");

echo "Thanks for contacting us!";


?>