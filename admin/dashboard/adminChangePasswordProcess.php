<?php
// echo ("success");
require "../../Database/connection.php";

session_start();

if (isset($_SESSION["ad"])) {

    $email = $_SESSION["ad"]["email"];

    $cp = $_POST["currentPassword"];
    $nepw = $_POST["newPassword"];
    $cnepw = $_POST["confirmPassword"];

    if (empty($cp)) {
        echo ("Please enter your current password");
    } else if (empty($nepw)) {
        echo ("Please enter your new password.");
    } else if (strlen($nepw) < 5 || strlen($nepw) > 20) {
        echo ("Password length must be between 5 and 20!");
    } else if (empty($cnepw)) {
        echo ("Please reenter your new password.");
    } else if ($nepw != $cnepw) {
        echo ("Password mismatch.");
    } else {
        $rs = Database::search("SELECT * FROM `admin` WHERE `email` = '".$email."' AND 
        `password` = '".$cp."'");

        $pw = $rs->fetch_assoc()["password"];
        if ($pw != $cp) {
            echo ("Current password is invalid");
        } else {
            Database::iud("UPDATE `admin` SET `password` = '".$nepw."' WHERE `email` = '".$email."'");

            echo("success");

        }


    }

} else {

    header('location: ../auth/SignIn.php');
}
