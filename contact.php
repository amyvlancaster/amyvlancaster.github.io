<?php
// Get data from form 
$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$preferred_contact = $_POST['contact-method']
$comments = $_POST['comments'];
 
$to = "amyvlancaster@gmail.com";
$subject = "Message from your website";
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message
$txt = "First Name: ". $first_name . 
"\r\n  Last Name: ". $last_name .
"\r\n Email: ". $email . 
"\r\n Phone: ". $phone .
"\r\n Preferred Method of Contact: ". $preferred_contact .
"\r\n Comments: ". $comments;
 
$headers = "From: noreply@demosite.com" . "\r\n" .
            "CC: somebodyelse@example.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location:confirmation.html");
?>