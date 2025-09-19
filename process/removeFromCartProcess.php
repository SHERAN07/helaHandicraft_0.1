<?php

session_start();
require "../Database/connection.php";

// echo "Item removed success.";

if (isset($_SESSION["u"]) && isset($_GET["c_id"])) {

    $cart_id = $_GET["c_id"];

    // echo $cart_id;

    $rs = Database::search("SELECT * FROM `cart` WHERE `id` = '" . $cart_id . "' AND `users_email` = '" . $_SESSION["u"]["email"] . "'");

    if ($rs->num_rows == 1) {

        $data = $rs->fetch_assoc();

        $now_qty = $data["qty"] - 1;

        if ($now_qty > 0) {
            Database::iud("UPDATE `cart` SET `qty` = '" . $now_qty . "' WHERE `id` = '" . $cart_id . "'");
            echo "success";
        } else {
            // Database::iud("DELETE FROM `cart` WHERE `id` = '" . $cart_id . "'");
            echo "You can use the delete option to remove the item completely from your cart.";
        }

        // Database::iud("DELETE FROM `cart` WHERE `id` = '" . $cart_id . "'");

 
    } else {
        echo "Item not found in cart";
    }

}

?>