<?php
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = 'New email from contact form';
}


if ($name === ''){
print json_encode(array('message' => 'Name cannot be empty', 'code' => 0));
exit();
}
if ($email === ''){
print json_encode(array('message' => 'Email cannot be empty', 'code' => 0));
exit();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
print json_encode(array('message' => 'Email format invalid.', 'code' => 0));
exit();
}
}
if ($message === ''){
print json_encode(array('message' => 'Message cannot be empty', 'code' => 0));
exit();
}

//$content ="From: $name \nEmail: $email \nMessage: $message";
$recipient = "ansarisajid765@gmail.com";
$mailheader = "From: ".$email;
$txt = "You have received an email from ".$name.".\n\n".$message;

mail($recipient, $subject, $txt, $mailheader) or die("ERRORS!");
header('Content-Type: application/json');
print json_encode(array('message' => 'Email successfully sent!', 'code' => 1));
exit();
?>