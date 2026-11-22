
<?php
include('./db_config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'janviijain008@gmail.com';
    $mail->Password = 'svsp fgdm bhuj zaaj';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('janviijain008@gmail.com', 'Admin Panel');

    $email = $_SESSION['adminEmail'];
    $mail->addAddress($email);

    $otp = random_int(100000, 999999);

    $mail->isHTML(true);
    $mail->Subject = 'Password Reset OTP';

    $mail->Body = '
        <div style="font-family: Arial, sans-serif; padding: 20px; background-color: #f4f6f9;">

            <div style="max-width: 450px; margin: auto; background-color: #ffffff; padding: 25px; border-radius: 8px; text-align: center;">

                <h2 style="color: #343a40;">Password Reset</h2>

                <p>Hello!</p>

                <p>Your OTP for resetting your password is:</p>

                <h1 style="color: #007bff; letter-spacing: 8px; background-color: #f4f6f9; padding: 15px; border-radius: 5px;">
                    '.$otp.'
                </h1>

                <p style="color: #666;">Please do not share this OTP with anyone.</p>

                <p style="color: #343a40;">Thank You,<br><b>Admin Panel Team</b></p>

            </div>
        </div>
        ';

    $mail->send();
    $_SESSION['otp'] = $otp;
    header("Location: ./otp_verification.php");
    exit();

} catch (Exception $e) {
    echo "Message could not be sent. Error: " . $mail->ErrorInfo;
}
?>