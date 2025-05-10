<?php
require "../Database/connection.php";

$np = $_POST["np"];
$rnp = $_POST["rnp"];
$vc = $_POST["vc"];
$email = $_POST["e"];

if (empty($email)) {
    echo "Please enter your email address.";
} else if (empty($np)) {
    echo "Please enter your new password.";
} else if (strlen($np) < 5 || strlen($np) > 20) {
    echo ("Password length must be between 5 and 20!");
} else if (empty($rnp)) {
    echo "Please reenter your new password.";
} else if ($np != $rnp) {
    echo "Password mismatch.";
} else if (empty($vc)) {
    echo "Please enter your verification code.";
} else {
    $rs = Database::search("SELECT * FROM `users` WHERE `verification_code` = '".$vc."' AND `email` = '".$email."'");

    if ($rs->num_rows == 1) {
        Database::iud("UPDATE `users` SET `password` = '".$np."' WHERE `email` = '".$email."' AND `verification_code` = '".$vc."'");
        Database::iud("UPDATE `users` SET `verification_code` = NULL WHERE `email` = '".$email."'");

        echo("success");

    } else {
        echo "Invalid verification code.";
    }
}


?>