<?php

$myemail = 'shivanggupta287@gmail.com';

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
if (isset($_POST['submit'] {

    $to = '$myemail';
    $email_subject = "Contact form submission: $name";
    $email_body = "You have received a new message. ".
        " Here are the details:\n Name: $name \n ".
        "Email: $email_address\n Message \n $message";
    $headers = "From: $myemail\n";
    $headers .= "Reply-To: $email_address";
    mail($to,$email_subject,$email_body,$headers);

    header('Location:index.html');
}
?>