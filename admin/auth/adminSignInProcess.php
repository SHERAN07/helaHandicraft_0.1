<?php

session_start();

require "../../Database/connection.php";


$email = $_POST["e"];
$password = $_POST["p"];
$rememberme = $_POST["r"];

if (empty($email)) {
    echo ("Please enter your Email");
} else if (strlen($email) > 100) {
    echo ("Email must have less than 100 characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email");
} else if (empty($password)) {
    echo ("Please enter your Password");
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo ("Invalid Password");
} else {

    $rs = Database::search("SELECT * FROM `admin` WHERE `email`='" . $email . "' AND 
    `password`='" . $password . "'");
    $n = $rs->num_rows;

    if ($n > 0) {
        $d = $rs->fetch_assoc();
        $_SESSION["ad"] = $d;

        if ($rememberme == "true") {
            setcookie("email", $email, time() + (60 * 60 * 24 * 360), "/");
            setcookie("password", $password, time() + (60 * 60 * 24 * 360), "/");
        } else {

            setcookie("email", "", -1, "/");
            setcookie("password", "", -1, "/");
        }
        echo ("success");
    } else {
        echo ("Invalid Username or Password");
    }
}
