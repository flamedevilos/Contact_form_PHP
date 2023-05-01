<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Validation 
    $errors = array();

    if(strlen($name) <= 3) {
        $errors[] = '<strong>name</strong> it\'s must to be more than <strong>3</strong> characters.';
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = '<strong>Invalid email.</strong>';
    }

    if(strlen($subject) <= 7) {
        $errors[] = '<strong>subject</strong> it\'s must to be more than <strong>7</strong> characters.';
    }

    if(strlen($message) <= 10) {
        $errors[] = '<strong>message</strong> it\'s must to be more than <strong>10</strong> characters.';
    }

    // No Error then send Mail 
    // Mail parameters [mail(To, Subject, Message, Header, Parameters)]

    /*
    $headers = 'From: ' .$mail . '\r\n';
    $myEmail = 'chroniquec@ymail.com';
    $subject = 'Contact Form';

    if(empty($errors)) {
        mail($myEmail, $subject, $message, $headers);

        $name = '';
        $mail = '';
        $subject = '';
        $message = '';

        $success = '<div class ="alert alert-success">We have received your request!</div>';
    }
    */

}

?>