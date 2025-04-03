<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader= "From:$name <$email>\r\n";
$mailheader.= "Reply-To: $name <$email>\r\n";
$recipient="canvascrafted.com@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo "Message Sent!";
    echo "Thank you for contacting us! " . $name . "!<br>"; 
	echo "You'll be redirected to home page in 3 seconds"; 
	header("refresh:3;url=index.php"); 
?>
