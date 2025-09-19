<?php

// echo "awoo";

require "../Database/connection.php";

session_start();

if (isset($_SESSION["u"])) {

    $uemail = $_SESSION["u"]["email"];

    $line1 = $_POST["ad1"];
    $line2 = $_POST["ad2"];
    $city = $_POST["upcity"];
    $district = $_POST["updis"];
    $province = $_POST["uppro"];
    $postcode = $_POST["postcode"];

    if (empty($line1)) {
        echo ("Plasae enter your Address Line 1");
    } else if (empty($line2)) {
        echo ("Plasae enter your Address Line 2");
    } else if (empty($city)) {
        echo ("Please select your City");
    } else {

        $rs = Database::search("SELECT * FROM `user_has_address` WHERE `users_email` = '" . $uemail . "'");

        if ($rs->num_rows == 0) {
            Database::iud("INSERT INTO `user_has_address` (`line1`,`line2`,`postal_code`,`city_id`,`users_email`) VALUES ('" . $line1 . "', '" . $line2 . "', '" . $postcode . "', '" . $city . "', '".$uemail."') ");
        } else {
            $rs = Database::iud("UPDATE `user_has_address` SET `line1` = '" . $line1 . "' , `line2` = '" . $line2 . "' , `postal_code` = '" . $postcode . "' , `city_id` = '" . $city . "' WHERE `users_email` = '" . $uemail . "' ");
        }

        echo ("success");
    }
} else {
    header('Location: ../index.php');
}
