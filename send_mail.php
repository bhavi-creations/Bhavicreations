<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // లేదా require 'PHPMailer/src/PHPMailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Honeypot Check (బాట్‌లు ఈ ఫీల్డ్స్ ని ఫిల్ చేస్తే మెయిల్ వెళ్ళకుండా ఆపుతుంది)
    if (!empty($_POST['website']) || !empty($_POST['nickname'])) {
        // Fake success response for bots
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
        exit();
    }

    // 2. Form inputs ని Sanitize చేయడం
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $phone   = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $email   = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $service = htmlspecialchars(trim($_POST['service'] ?? 'Not Selected'));
    $budget  = htmlspecialchars(trim($_POST['budget'] ?? 'Not Selected'));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));
    $source  = htmlspecialchars(trim($_POST['source'] ?? 'Homepage Popup'));

    // Optional ఫీల్డ్స్ ఖాళీగా ఉంటే డిఫాల్ట్ టెక్స్ట్
    if (empty($service)) { $service = "Not specified"; }
    if (empty($budget))  { $budget  = "Not specified"; }

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'manimalladi05@gmail.com';
        $mail->Password   = 'rcaueajfwhczcrhm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Sender & Recipient Setup
        $mail->setFrom('manimalladi05@gmail.com', 'Website Lead Form');
        $mail->addAddress('manimalladi05@gmail.com', 'Admin');
        $mail->addReplyTo($email, $name);

        // Mail Content Formatting (HTML)
        $mail->isHTML(true);
        $mail->Subject = "New Popup Lead: " . $name . " (" . $service . ")";

        $mail->Body = "
            <div style='font-family: Arial, sans-serif; padding: 20px; border: 1px solid #ddd; max-width: 600px; margin: 0 auto;'>
                <h3 style='color: #1c3366; border-bottom: 2px solid #1c3366; padding-bottom: 8px;'>New Inquiry Received</h3>
                <p><strong>Source:</strong> {$source}</p>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Selected Service:</strong> {$service}</p>
                <p><strong>Monthly Budget:</strong> {$budget}</p>
                <p><strong>Goal / Message:</strong></p>
                <p style='background: #f9f9f9; padding: 12px; border-left: 4px solid #1c3366; line-height: 1.5;'>{$message}</p>
            </div>
        ";

        $mail->send();
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";

    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}'); window.history.back();</script>";
    }
} else {
    header("Location: index.html");
    exit();
}
?>