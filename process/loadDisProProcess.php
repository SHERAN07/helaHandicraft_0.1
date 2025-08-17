<?php
session_start();
require "../Database/connection.php";

if (isset($_SESSION["u"]) && isset($_GET["id"])) {

    $city_id = $_GET["id"];

    $rs = Database::search("SELECT * FROM `city` INNER JOIN `district`
                ON `district`.`id`=`city`.`district_id` INNER JOIN `province`
                ON `province`.`id`=`district`.`province_id`
                WHERE `city`.`id`='" . $city_id . "'");

    $district;
    $province;
    if ($rs->num_rows > 0) {
        $data = $rs->fetch_assoc();
        $district = $data["district_name"];
        $province = $data["province_name"];

        $array["d_name"] = $district;
        $array["p_name"] = $province;

        echo json_encode($array);

    } else {
        echo "invalid city id";
    }
} else {
    echo "no valid session";
}
