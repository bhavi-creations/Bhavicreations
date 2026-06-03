<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // FORM DATA
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $phone   = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));

    $mail = new PHPMailer(true);

    try {

        // SMTP SETTINGS
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;

        // YOUR GMAIL
        $mail->Username   = 'manimalladi05@gmail.com';

        // Gmail App Password
        $mail->Password   = 'cvarqcchfjpawxvo';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // FROM
        $mail->setFrom('manimalladi05@gmail.com', 'Website Contact Form');

        // WHERE MAIL SHOULD COME
        $mail->addAddress('manimalladi05@gmail.com');

        // REPLY TO USER
        $mail->addReplyTo($email, $name);

        // EMAIL FORMAT
        $mail->isHTML(true);

        $mail->Subject = "New Landing Page Enquiry";

        $mail->Body = "
        <h2>New Contact Form Submission</h2>

        <table border='1' cellpadding='10' cellspacing='0' width='100%'>
            <tr>
                <th align='left'>Name</th>
                <td>$name</td>
            </tr>

            <tr>
                <th align='left'>Email</th>
                <td>$email</td>
            </tr>

            <tr>
                <th align='left'>Phone</th>
                <td>$phone</td>
            </tr>

            <tr>
                <th align='left'>Message</th>
                <td>$message</td>
            </tr>
        </table>
        ";

        // SEND MAIL
        if ($mail->send()) {

            echo "
            <script>
                 window.location.href='thankyou.php';
            </script>
            ";

        } else {

            echo "
            <script>
                alert('Mail Sending Failed!');
                window.location.href='landing_form.php';
            </script>
            ";
        }

    } catch (Exception $e) {

        echo "
        <script>
            alert('Mailer Error: {$mail->ErrorInfo}');
            window.location.href='landing_form.php';
        </script>
        ";
    }
}
?>


