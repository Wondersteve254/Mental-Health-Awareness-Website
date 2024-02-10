<?php
if(isset($_POST['submit'])) {
    // collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // set up email
    $to = 'stevewonder309@gail.com'; // replace with your email address
    $subject = 'New message from website';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    // send email
    if(mail($to, $subject, $body)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Message could not be sent.';
    }
}
?>
