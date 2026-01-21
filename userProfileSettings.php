<?php
session_start();

if (isset($_SESSION["u"])) {
    $session = $_SESSION["u"];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>User Profile Settings</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>

        <?php include "navbar.php"; ?>

        <!-- Profile Settings Container -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center ">User Profile Settings</h2>
                    <!-- Profile Image -->
                    <div class="card mb-4 my-5">
                        <div class="card-header">
                            <h5 class="text-center my-2">Profile Image</h5>
                        </div>
                        <div class="text-center mb-4">

                            <?php

                            $rs = Database::search("SELECT * FROM `userProfile` WHERE `users_email` = '" . $session["email"] . "'");

                            $path = "resources/userProfile/profile-img.jpg";

                            if ($rs->num_rows > 0) {

                                $path = $rs->fetch_assoc()["path"];
                            }
                            ?>

                            <img src="<?php echo $path ?>" alt="Profile Picture" class="img-thumbnail mt-4 rounded-circle my-2" style="width: 150px; height: 150px; object-fit: cover;">
                            <div class="mt-3 ">
                                <input type="file" class="d-none" id="userImageuploader" accept="image/jpeg, image/jpg, image/png" />
                                <label for="userImageuploader" class="btn btn-dark text-white" onclick="updateUserImage();">Update Profile</label>
                            </div>

                        </div>
                    </div>

                    <!-- Personal Information Section -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="text-center my-2">Personal Information</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex gap-2 mb-3">

                                <div class="form-group  w-100">
                                    <label class="form-label " for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" value="<?php echo $session["fname"]; ?>">
                                </div>
                                <div class="form-group w-100">
                                    <label class="form-label my-1" for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" value="<?php echo $session["lname"]; ?>">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label my-1" for="uemail">Email address</label>
                                <input type="email" class="form-control de" id="uemail" value="<?php echo $session["email"]; ?>" readonly>
                            </div>
                            <div class="d-flex gap-2 mb-3">
                                <div class="form-group w-100">
                                    <label class="form-label my-1" for="phoneNumber">Mobile Number</label>
                                    <input type="text" class="form-control" id="phoneNumber" value="<?php echo $session["mobile"]; ?>">
                                </div>
                                <div class="form-group w-100">
                                    <label class="form-label my-1 " for="gender">Gender</label>
                                    <input type="gemder" class="form-control" id="gender"
                                        value="<?php
                                                if ($session["gender_id"] == 1) {
                                                    echo "Male";
                                                } else {
                                                    echo "Female";
                                                }
                                                ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label my-1" for="password">Password</label>
                                <input type="password" class="form-control" id="password" value="<?php echo $session["password"]; ?>" readonly>
                            </div>
                            <button type="submit" class="btn btn-primary my-3" onclick="changeUserInfo();">Save Changes</button>
                        </div>
                    </div>
                    <!-- Address Section -->
                    <div class="card mb-4 address-box" id="addressSection">
                        <div class="card-header">
                            <h5 class="text-center my-2">Address Information</h5>
                        </div>

                        <?php
                        $user_address = Database::search("SELECT * FROM `user_has_address` INNER JOIN `city` ON `user_has_address`.`city_id` = `city`.`id` INNER JOIN `district` ON `district`.`id`=`city`.`district_id` INNER JOIN `province` ON `province`.`id`=`district`.`province_id` WHERE `users_email` = '" . $session["email"] . "'");

                        $line1 = "";
                        $line2 = "";
                        $postcode = "";
                        $district = "";
                        $province = "";

                        $address;

                        if ($user_address->num_rows > 0) {
                            $address = $user_address->fetch_assoc();
                            $line1 = $address["line1"];
                            $line2 = $address["line2"];
                            $postcode = $address["postal_code"];
                            $district = $address["district_name"];
                            $province = $address["province_name"];
                        }

                        ?>

                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label class="form-label " for="ad1">Address Line 1</label>
                                <input type="text" class="form-control" id="ad1" value="<?php echo $line1; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label my-1" for="ad2">Address Line 2</label>
                                <input type="text" class="form-control" id="ad2" value="<?php echo $line2; ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label">City</label>
                                <select class="form-select" id="upcity" onchange="loadDisPro();">

                                    <option value="0">Select City</option>

                                    <?php
                                    $city_rs = Database::search("SELECT * FROM city");
                                    $city_num = $city_rs->num_rows;
                                    for ($x = 0; $x < $city_num; $x++) {
                                        $city_data = $city_rs->fetch_assoc();

                                    ?>

                                        <option value="<?php echo $city_data["id"]; ?>"
                                            <?php
                                            if ($user_address->num_rows > 0) {
                                                if ($city_data["id"] == $address["city_id"]) {
                                            ?>selected <?php
                                                    }
                                                }

                                                        ?>>
                                            <?php echo $city_data["city_name"]; ?>
                                        </option>

                                    <?php

                                    }
                                    ?>

                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label my-1" for="updis">District</label>
                                <input type="text" class="form-control" id="updis" value="<?php echo $district; ?>" disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label my-1" for="uppro">Province</label>
                                <input type="text" class="form-control" id="uppro" value="<?php echo $province; ?>" disabled>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label my-1" for="postcode">Postal Code</label>
                                <input type="text" class="form-control" id="postcode" value="<?php echo $postcode; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary my-3" onclick="changeUserAddress();">Save Changes</button>
                        </div>
                    </div>
                    <!-- Address Section -->

                    <!-- Change Password Section -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="text-center my-2">Change Password</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="cPassword" class="form-label">Current Password</label>
                                <input type="password" class="form-control" id="cPassword" placeholder="Enter current password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="nPassword" class="form-label my-1">New Password</label>
                                <input type="password" class="form-control" id="nPassword" placeholder="Enter new password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="conPassword" class="form-label my-1">Confirm New Password</label>
                                <input type="password" class="form-control" id="conPassword" placeholder="Confirm new password">
                            </div>
                            <button type="submit" class="btn btn-primary my-2" onclick="userChangePassword();">Change Password</button>
                        </div>
                    </div>
                    <!-- Privacy Settings Section -->
                    <!-- <div class="card mb-4">
                        <div class="card-header">
                            Privacy Settings
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="profileVisibility">
                                <label class="form-check-label" for="profileVisibility">Make Profile Public</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="activityVisibility">
                                <label class="form-check-label" for="activityVisibility">Show Activity Status</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Settings</button>
                        </div>
                    </div> -->
                    <!-- Change Password Section -->
                    <!-- Notification Settings Section -->
                    <div class="card mb-4">
                        <div class="card-header">
                            Notification Settings
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="emailNotifications">
                                <label class="form-check-label" for="emailNotifications">Email Notifications</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="smsNotifications">
                                <label class="form-check-label" for="smsNotifications">SMS Notifications</label>
                            </div>
                            <button type="submit" class="btn btn-primary my-1">Save Settings</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Notification Settings Section -->

        <?php include "footer.php"; ?>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                document.body.classList.remove("fade-out");
            });
        </script>
        <!-- Bootstrap JS and dependencies -->
        <script src="js/sweetalert.js"></script>
        <script src="js/script.js"></script>
        <script src="js/bootstrap.bundle.js"></script>

    </body>

    </html>
<?php

} else {
    header("Location: index.php");
    exit();
}

?>