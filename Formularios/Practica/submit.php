<?php

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $errors = [];

    if (!empty($name)) {
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    } else {
        $errors[] = 'Name is required';
    }

    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Invalid email format';
        }
    } else {
        $errors[] = 'Email is required';
    }

    if (!empty($message)) {
        $message = strip_tags($message);
        $message = stripslashes($message);
        $message = trim($message);
        $send_to = 'santiagoguttierrez.sg@gmail.com';
        $subject = 'New message from contact form';
        $ready_to_send_message = "Name: $name\nEmail: $email\nMessage: $message";
        mail($send_to, $subject, $ready_to_send_message); // This ain't gonna work in a local environment without a mail server (XAMPP or similar)
    } else {
        $errors[] = 'Message is required';
    }
}

require 'index.php';

?>