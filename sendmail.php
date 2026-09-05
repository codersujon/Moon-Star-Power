<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {

    http_response_code(403);

    echo json_encode([
        "status" => false,
        "message" => "There was a problem with your submission, please try again."
    ]);

    exit;
}


// Get form data
$name    = trim($_POST["form_name"] ?? '');
$email   = trim($_POST["form_email"] ?? '');
$subject = trim($_POST["form_subject"] ?? '');
$phone   = trim($_POST["form_phone"] ?? '');
$message = trim($_POST["form_message"] ?? '');


// Clean data
$name = strip_tags($name);
$name = str_replace(["\r", "\n"], " ", $name);

$phone = strip_tags($phone);
$phone = str_replace(["\r", "\n"], " ", $phone);

$subject = strip_tags($subject);
$subject = str_replace(["\r", "\n"], " ", $subject);

$message = strip_tags($message);


// Validate
if (
    empty($name) ||
    empty($email) ||
    empty($subject) ||
    empty($phone) ||
    empty($message) ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {

    http_response_code(400);

    echo json_encode([
        "status" => false,
        "message" => "Please complete the form and try again."
    ]);

    exit;
}


// Recipient
$recipient = "msptl.amr@gmail.com";


// Email subject
$email_subject = "Inquiry Regarding " . $subject . " - " . $name;


// Email content
$email_content  = "You have received a new inquiry from your website.\n\n";
$email_content .= "----------------------------------------\n";
$email_content .= "Name: " . $name . "\n";
$email_content .= "Email: " . $email . "\n";
$email_content .= "Phone: " . $phone . "\n";
$email_content .= "Discuss About: " . $subject . "\n";
$email_content .= "----------------------------------------\n\n";
$email_content .= "Message:\n";
$email_content .= $message . "\n";


// PHPMailer
$mail = new PHPMailer(true);

try {

    // SMTP
    $mail->isSMTP();
    $mail->Host       = 'mail.moonstarpower.com';
    $mail->SMTPAuth   = true;

    // cPanel email
    $mail->Username   = 'info@moonstarpower.com';
    $mail->Password   = 'MoonSt@r2026';

    // SSL
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;


    // Sender
    $mail->setFrom(
        'info@moonstarpower.com',
        'Moon Star Power & Technology'
    );


    // Receiver
    $mail->addAddress(
        $recipient
    );


    // Reply to visitor
    $mail->addReplyTo(
        $email,
        $name
    );


    // Email format
    $mail->isHTML(false);


    // Subject
    $mail->Subject = $email_subject;


    // Body
    $mail->Body = $email_content;


    // Send
    $mail->send();


    http_response_code(200);

    echo json_encode([
        "status" => true,
        "message" => "Thank you! Your message has been sent successfully."
    ]);

} catch (Exception $e) {

    http_response_code(500);

    echo json_encode([
        "status" => false,
        "message" => $mail->ErrorInfo
    ]);
}