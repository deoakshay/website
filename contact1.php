<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "akshaydeo92@gmail.com";
$subject ="Email from website";

mail($to,$subject,$message,"From: " . $name);
echo "Thank you for you Email!";

?>
