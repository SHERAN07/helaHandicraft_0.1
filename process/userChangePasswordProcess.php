<?php
// echo ("success");
require "../Database/connection.php";

session_start();

if (isset($_SESSION["u"])) {

    $uemail = $_SESSION["u"]["email"];

    $ucp = $_POST["cPassword"];
    $unepw = $_POST["nPassword"];
    $ucnepw = $_POST["conPassword"];

    if (empty($ucp)) {
        echo ("Please enter your current password");
    } else if (empty($unepw)) {
        echo ("Please enter your new password.");
    } else if (strlen($unepw) < 5 || strlen($unepw) > 20) {
        echo ("Password length must be between 5 and 20!");
    } else if (empty($ucnepw)) {
        echo ("Please reenter your new password.");
    } else if ($unepw != $ucnepw) {
        echo ("Password mismatch.");
    } else {
        $rs = Database::search("SELECT * FROM `users` WHERE `email` = '".$uemail."' AND 
        `password` = '".$ucp."'");

        $upw = $rs->fetch_assoc()["password"];
        if ($upw != $ucp) {
            echo ("Current password is invalid");
        } else {
            Database::iud("UPDATE `users` SET `password` = '".$unepw."' WHERE `email` = '".$uemail."'");

            echo("success");

        }


    }

} else {

    header('location: ../auth/SignIn.php');
}
