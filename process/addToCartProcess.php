<?php
session_start();
require "../Database/connection.php";

// echo "Item added success.";

if (isset($_SESSION["u"]) && isset($_GET["p_id"])) {

    $product_id = $_GET["p_id"];

    // echo $product_id;

    $rs = Database::search("SELECT *, `cart`.`id` AS `c_id`, `product`.`id` AS `p_id` FROM `cart` INNER JOIN `product` ON `cart`.`product_id` = `product`.`id` WHERE `users_email` = '" . $_SESSION["u"]["email"] . "' AND `product_id` = '" . $product_id . "'");

    if ($rs->num_rows == 1) {
        $data = $rs->fetch_assoc();

        $new_qty = $data["qty"] + 1;

        $s_qty = $data["p_qty"];

        $a_qty = $data["mb_qty"]; // maximum buy quantity

        if ($new_qty <= $s_qty) {

            if ($new_qty <= $a_qty) {

                Database::iud("UPDATE `cart` SET `qty` = '" . $new_qty . "' WHERE `id` = '" . $data["c_id"] . "'");

                echo "success";
            } else {
                echo "Maximum Buy quantity reached";
            }
        } else {
            echo "Stock quantity exceeded";
        }
    } else {

        $s_qty = $data["p_qty"];

        if ($s_qty > 0) {

            Database::iud("INSERT INTO `cart`(`users_email`, `product_id`, `qty`) VALUES ('" . $_SESSION["u"]["email"] . "','" . $product_id . "',1)");
            echo "success";

        } else {
            echo "Stock quantity exceeded";
        }
    }
}
