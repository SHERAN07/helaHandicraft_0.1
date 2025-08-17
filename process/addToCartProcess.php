<?php
session_start();
require "../Database/connection.php";

// echo "Item added success.";

if (isset($_SESSION["u"]) && isset($_GET["p_id"])) {
    
    $product_id = $_GET["p_id"];

    // echo $product_id;

    $rs = Database::search("SELECT * FROM `cart` WHERE `users_email` = '" . $_SESSION["u"]["email"] . "' AND `product_id` = '" . $product_id . "'");

    if ($rs->num_rows == 1){
        
    }


}

?>