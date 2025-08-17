<?php
require "../Database/connection.php";
// echo "Awooo";

session_start();

if (isset($_SESSION["u"])) {

    $uemail = $_SESSION["u"]["email"];

    $fname = $_POST["firstName"];
    $lname = $_POST["lastName"];
    $mobile = $_POST["phoneNumber"];

    if (empty($fname)) {
        echo ("Please enter your First Name");
    } else if (strlen(string: $fname) > 45) {
        echo ("First should be lower than 45 characters");
    } else if (empty($lname)) {
        echo ("Please enter your Last Name");
    } else if (strlen(string: $lname) > 45) {
        echo ("Last should be lower than 45 characters");
    } else if (empty($mobile)) {
        echo ("Please Enter Your Mobile Number.");
    } else if (strlen($mobile) != 10) {
        echo ("Mobile Number Must Contain 10 characters.");
    } else if (!preg_match("/07[0,1,2,4,5,6,7,8]{1}[0-9]{7}/", $mobile)) {
        echo ("Invalid Mobile Number.");
    } else {


        Database::iud("UPDATE `users` SET `fname` = '" . $fname . "', `lname` = '" . $lname . "', `mobile` = '" . $mobile . "' WHERE `email` = '" . $uemail . "'");

        $_SESSION["u"]["fname"] = $fname;
        $_SESSION["u"]["lname"] = $lname;
        $_SESSION["u"]["mobile"] = $mobile;
        

        echo ("success");
    }
} else {

    header('location: ../index.php');
}
