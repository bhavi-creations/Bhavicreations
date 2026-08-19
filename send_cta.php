<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // లేదా require 'PHPMailer/src/PHPMailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Anti-Spam Honeypot Check
    if (!empty($_POST['website']) || !empty($_POST['nickname'])) {
        echo "<script>alert('Enquiry sent successfully!'); window.location.href='index.html';</script>";
        exit();
    }

    // 2. Form Inputs Sanitize చేయడం
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $service = htmlspecialchars(trim($_POST['service'] ?? 'Not Selected'));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $source  = htmlspecialchars(trim($_POST['source'] ?? 'Bhavi Creations Homepage'));

    // Required fields ఖాళీగా ఉంటే తనిఖీ చేయడం
    if (empty($name) || empty($email) || empty($phone) || empty($message)) {
        echo "<script>alert('Please fill all required fields.'); window.history.back();</script>";
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP సర్వర్ సెట్టింగ్స్
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'rcaueajfwhczcrhm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Recipient Details
        $mail->setFrom('manimalladi05@gmail.com', 'Bhavi Creations Website');
        $mail->addAddress('manimalladi05@gmail.com', 'Admin');
        $mail->addReplyTo($email, $name);

        // Email Content (HTML Format)
        $mail->isHTML(true);
        $mail->Subject = "New CTA Enquiry: " . $name . " - " . $service;

        $mail->Body = "
            <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #e0e0e0; max-width: 600px; border-radius: 8px;'>
                <h2 style='color: #023e7d; border-bottom: 2px solid #023e7d; padding-bottom: 10px; margin-top: 0;'>New Website Enquiry</h2>
                <p><strong>Source:</strong> {$source}</p>
                <p><strong>Full Name:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Required Service:</strong> {$service}</p>
                <br>
                <p><strong>Project Details:</strong></p>
                <div style='background: #f4f6f9; padding: 15px; border-left: 4px solid #023e7d; border-radius: 4px;'>
                    " . nl2br($message) . "
                </div>
            </div>
        ";

        $mail->send();
        echo "<script>alert('Thank you! Your enquiry has been sent successfully.'); window.location.href='index.html';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    header("Location: index.html");
    exit();
}
