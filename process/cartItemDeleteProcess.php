<?php
session_start();
//echo "Cart item deletion process initiated.";
require "../Database/connection.php";

if (isset($_SESSION["u"]) && isset($_GET["c_id"])) {
    
    $cart_id = $_GET["c_id"];

    // echo $cart_id;

    $rs = Database::search("SELECT * FROM `cart` WHERE `id` = '" . $cart_id . "'");

    if ($rs->num_rows == 1) {
        // echo "Cart item found. Proceeding to delete.";
        Database::iud("DELETE FROM `cart` WHERE `id` = '" . $cart_id . "'");
        echo "success";
    }

}

?>