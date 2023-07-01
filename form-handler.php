<?php
$name =$_POST['name'];
$visitor_email = $_POST['email'];
$course = $_POST['course'];
$message = $_POST['message'];

$email_from = 'thedaudgyst@gmail.com';

$email_course = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Course: $course.\n".
               "User Message: $message.\n";


$to = 'mohapatrasuvam179@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply To: $visitor_email \r\n";

mail($to,$email_course,$email_body,$headers)

?>