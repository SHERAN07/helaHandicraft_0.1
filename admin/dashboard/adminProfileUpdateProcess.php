<?php
require "../../database/connection.php";
session_start();

if (isset($_SESSION["ad"])) {
    $email = $_SESSION["ad"]["email"];

    if (sizeof($_FILES) == 1) {

        $allowed_image_extensions = array("image/jpg", "image/jpeg", "image/png");

        if (isset($_FILES["img0"])) {

            $img_file = $_FILES["img0"];
            $file_extension = $img_file["type"];

            if (in_array($file_extension, $allowed_image_extensions)) {

                $new_img_extension;

                if ($file_extension == "image/jpg") {
                    $new_img_extension = ".jpg";
                } else if ($file_extension == "image/jpeg") {
                    $new_img_extension = ".jpeg";
                } else if ($file_extension == "image/png") {
                    $new_img_extension = ".png";
                }

                $targetDir = __DIR__ . "/../../resources/adminProfile/";
                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true); // Create the folder if it doesn't exist
                }

                $file_name = $email . $new_img_extension;
                $file_path = $targetDir . $file_name;

                move_uploaded_file($img_file["tmp_name"], $file_path);

                // Save path relative to web root (for database or web use)
                $relative_path = "../../resources/adminProfile/" . $file_name;


                $rs = Database::search("SELECT * FROM adminprofile WHERE Admin_email='" . $email . "'");

                if ($rs->num_rows == 0) {

                    Database::iud("INSERT INTO adminprofile (`path`,Admin_email) VALUES ('" . $relative_path . "','" . $email . "')");
                } else {
                    Database::iud("UPDATE adminprofile set `path`= '" . $relative_path . "' WHERE Admin_email='" . $email . "' ");
                }
                echo ("success");
            } else {
                echo ("Not an allowed image type.");
            }
        }

        
    } else {
        echo ("Please Select at least 01 image");
    }
}

?>