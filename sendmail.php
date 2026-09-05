<?php

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
        exit;
    }

    //** Get form data */
    $name    = trim($_POST["form_name"] ?? '');
    $email   = trim($_POST["form_email"] ?? '');
    $subject = trim($_POST["form_subject"] ?? '');
    $phone   = trim($_POST["form_phone"] ?? '');
    $message = trim($_POST["form_message"] ?? '');

    //** Clean name */
    $name = strip_tags($name);
    $name = str_replace(["\r", "\n"], " ", $name);

    //** Clean phone */
    $phone = strip_tags($phone);
    $phone = str_replace(["\r", "\n"], " ", $phone);

    //** Clean subject */
    $subject = strip_tags($subject);
    $subject = str_replace(["\r", "\n"], " ", $subject);

    //** Validate */
    if (empty($name) || empty($email) || empty($subject) || empty($phone) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Please complete the form and try again.";
        exit;
    }

    //** Your receiving email */
    $recipient = "csesujon155@gmail.com";

    //** Email subject */
    $email_subject = "New Website Inquiry - " . $subject;

    //** Email body */
    $email_content  = "You have received a new inquiry from your website.\n\n";
    $email_content .= "----------------------------------------\n";
    $email_content .= "Name: " . $name . "\n";
    $email_content .= "Email: " . $email . "\n";
    $email_content .= "Phone: " . $phone . "\n";
    $email_content .= "Discuss About: " . $subject . "\n";
    $email_content .= "----------------------------------------\n\n";
    $email_content .= "Message:\n";
    $email_content .= $message . "\n";

    //** Email headers */
    $email_headers  = "From: Website Contact Form <noreply@moonstarpower.com>\r\n";
    $email_headers .= "Reply-To: " . $email . "\r\n";
    $email_headers .= "MIME-Version: 1.0\r\n";
    $email_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    //** Send email */
    if (mail($recipient, $email_subject, $email_content, $email_headers)) {

        http_response_code(200);
        echo "Thank You! Your message has been sent.";

    } else {

        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message.";

    }
?>