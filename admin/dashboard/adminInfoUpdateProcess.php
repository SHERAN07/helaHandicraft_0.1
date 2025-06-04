<?php
require "../../Database/connection.php";
// echo "Awooo";

session_start();

if (isset($_SESSION["ad"])) {

    $fn = $_POST["fn"];
    $ln = $_POST["ln"];

    if (empty($fn)) {
        echo ("Please enter your First Name");
    } else if (strlen(string: $fn) > 45) {
        echo ("First should be lower than 45 characters");
    } else if (empty($ln)) {
        echo ("Please enter your Last Name");
    } else if (strlen(string: $ln) > 45) {
        echo ("Last should be lower than 45 characters");
    } else {
        
        Database::iud("UPDATE `admin` SET `fname` = '" . $fn . "', `lname` = '" . $ln . "' 
        WHERE `email` = '" . $_SESSION["ad"]["email"] . "'");

        $_SESSION["ad"]["fname"] = $fn;
        $_SESSION["ad"]["lname"] = $ln;

        echo ("success");
    }
} else {

    header('location: ../auth/SignIn.php');
}
