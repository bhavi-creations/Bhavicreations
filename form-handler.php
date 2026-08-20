<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method not allowed']);
    exit;
}

if (!empty($_POST['website']) || !empty($_POST['nickname'])) {
    echo json_encode(['ok' => true]);
    exit;
}

$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
$city = htmlspecialchars(trim($_POST['city'] ?? ''));
$state = htmlspecialchars(trim($_POST['state'] ?? ''));
$service = htmlspecialchars(trim($_POST['service'] ?? 'Not Selected'));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));
$source = htmlspecialchars(trim($_POST['source'] ?? 'Bhavi Creations Homepage'));

if ($name === '' || $email === '' || $phone === '' || $message === '') {
    http_response_code(422);
    echo json_encode(['ok' => false, 'error' => 'Please fill all required fields.']);
    exit;
}

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'manimalladi05@gmail.com';
    $mail->Password = 'rcaueajfwhczcrhm';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('manimalladi05@gmail.com', 'Bhavi Creations Website');
    $mail->addAddress('manimalladi05@gmail.com', 'Admin');
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Landing Page Enquiry: ' . $name;
    $mail->Body = "
        <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #e0e0e0; max-width: 600px; border-radius: 8px;'>
            <h2 style='color: #023e7d; border-bottom: 2px solid #023e7d; padding-bottom: 10px; margin-top: 0;'>New Website Enquiry</h2>
            <p><strong>Source:</strong> {$source}</p>
            <p><strong>Full Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>City:</strong> " . ($city !== '' ? $city : 'Not Provided') . "</p>
            <p><strong>State:</strong> " . ($state !== '' ? $state : 'Not Provided') . "</p>
            <p><strong>Required Service:</strong> {$service}</p>
            <br>
            <p><strong>Project Details:</strong></p>
            <div style='background: #f4f6f9; padding: 15px; border-left: 4px solid #023e7d; border-radius: 4px;'>
                " . nl2br($message) . "
            </div>
        </div>
    ";

    $mail->send();
    echo json_encode(['ok' => true]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Message could not be sent. Please try again later.']);
}
