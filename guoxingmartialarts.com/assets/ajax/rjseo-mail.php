<?php

$headers[] = 'From: GuoXingMartialArtsContactUsForm@template.com';
if (isset($_POST['name']) && isset($_POST['email'])) {
    $toAddress = "Guo Xing Martial Arts School <guoxingmartialarts@gmail.com>";
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if (isset($_POST['msg'])) {
        $comments = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
    } else {
        $comments = "No Message";
    }
    if (isset($_POST['phone'])) {
        // Trim blank spaces off of the ends of the phone number
        $trim_phone = trim($_POST['phone']);
        // Replace all non-digit characters with a period for readability
        $phone = preg_replace('/[^0-9]/', '.', $trim_phone);
    } else {
        $phone = "N/A";
    }

    // The message
    $message .= "Name: $name \r\n";
    $message .= "Email: $email \r\n";
    $message .= "Phone: $phone \r\n";     
    $message .= "Comments: $comments \r\n";

    // In case any of our lines are larger than 70 characters, we should use wordwrap()
    $message = wordwrap($message, 70, "\r\n");

    // Set the subject
    $mySubject = "Website Contact Us Form Submission from $email";
    // Send
    try {
        mail($toAddress,$mySubject, $message, implode("\r\n", $headers));
        echo true;
    } catch (Exception $e) {
        error_log("Exception $e");
        echo false;
    }
} else {
    echo false;
}