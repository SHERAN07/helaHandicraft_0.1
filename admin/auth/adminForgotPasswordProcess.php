<?php
require "../../Database/connection.php";

require "../../phplib/SMTP.php";
require "../../phplib/PHPMailer.php";
require "../../phplib/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET["e"])) {

    $email = $_GET["e"];

    $rs = Database::search("SELECT* FROM `admin` WHERE `email`='" . $email . "'");
    $n = $rs->num_rows;

    if ($n == 1) {

        $code = rand(100000, 999999);

        Database::iud("UPDATE `admin` SET `verification_code`='" . $code . "' WHERE `email`='" . $email . "'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sheranavushka@gmail.com';
        $mail->Password = 'mhcnakawgrjzwifs';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('sheranavushka@gmail.com', 'Hela Handicrafts');
        $mail->addReplyTo('sheranavushka@gmail.com', 'Hela Handicrafts');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Hela Handicrafts Forgot Password Verification Code';
        $bodyContent = '<body style="margin:0; padding:0; font-family:"Segoe UI", sans-serif; background-color:#f4f4f4;">
    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; margin:auto; background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.1);">
        <!-- Header -->
        <tr>
            <td align="center" style="background:linear-gradient(90deg,rgb(186, 18, 18) 0%,rgba(229, 95, 33, 0.81) 100%); padding:40px 20px;">
                <h1 style="margin:0; font-size:28px; color:#ffffff;">Reset Your Admin Panel Password</h1>
                <p style="margin-top:10px; font-size:16px; color:#e0e0e0;">We\'re here to help you securely reset it</p>
            </td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding:30px 20px 20px 20px; color:#333333;">
                <p style="font-size:16px; margin:0 0 20px;">Hi there,</p>
                <p style="font-size:16px; margin:0 0 20px;">
                    We received a request to reset your password. Use the one-time password (OTP) below to proceed.
                </p>

                <!-- OTP Box -->
                <div style="text-align:center; margin:30px 0;">
                    <span style="display:inline-block; background-color:rgba(238, 69, 69, 0.96) ; color:#ffffff; font-size:24px; font-weight:bold; letter-spacing:8px; padding:15px 30px; border-radius:8px;">
                        ' . $code . '
                    </span>
                </div>';
        $bodyContent .= '</body>';

        $mail->Body = $bodyContent;

        if (!$mail->send()) {
            echo ("Email Sending Failed");
        } else {
            echo ("success");
        }
    } else {
        echo ("Invalid Email Address. Enter a valid Email Address.");
    }
} else {
    echo ("Please enter your Email Address First.");
}
?>