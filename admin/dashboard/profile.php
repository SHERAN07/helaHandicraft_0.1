<?php
require "../../Database/connection.php";

session_start();

if (isset($_SESSION["ad"])) {

    $session = $_SESSION["ad"];
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Admin Profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap 5 CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body style="margin: 0; background-color: #f8f9fa;">

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 p-0">

                    <?php include "sidemenu.php"; ?>

                </div>
                <div class="col-md-10">
                    <h2 class="mt-4 fw-bold text-center mb-3">Admin Profile</h2>

                    <div class="container-fluid">
                        <div class="row">
                            <!-- Profile Image -->
                            <div class="col-md-4 text-center mb-4">
                                <?php 

                                $rs = Database::search("SELECT * FROM `adminprofile` WHERE `admin_email` = '".$session["email"]."'");
                                
                                $path = "../../resources/adminProfile/profile-img.jpg";

                                if ($rs->num_rows > 0) {
                                    $path = $rs->fetch_assoc()["path"];
                                }
                                ?>

                                <img src="<?php echo $path ?>" alt="Profile Picture" class="img-thumbnail rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                <div class="mt-3">
                                    <input type="file" class="d-none" id="imageuploader" accept="image/jpeg, image/jpg, image/png" />
                                    <label for="imageuploader" class="btn btn-dark text-white" onclick="updateAdminImage();">Update Profile</label>
                                </div>
                            </div>

                            <!-- Profile Details -->
                            <div class="col-md-8">
                                <div class="card shadow-sm">

                                    <h4 class="mt-4 fw-bold text-center mb-3">Personal Information</h4>

                                    <div class="card-body">


                                        <div class="mb-3">
                                            <label class="form-label">Fast Name</label>
                                            <input type="text" class="form-control" id="fn" value="<?php echo $session["fname"] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" id="ln" class="form-control" value="<?php echo $session["lname"] ?>">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control" value="<?php echo $session["email"] ?>" disabled>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" value="<?php echo $session["password"] ?>" disabled>
                                        </div>

                                        <button class="btn btn-success" onclick="updateInfo();">Update Profile</button>

                                    </div>
                                </div>
                                <!-- Change Password Section -->
                                <div class="card my-5 shadow-sm">

                                    <h4 class="mt-4 fw-bold text-center mb-3">Change Password</h4>

                                    <div class="card-body">
                                        <div class="form-group mb-3">
                                            <label for="currentPassword" class="form-label">Current Password</label>
                                            <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="newPassword" class="form-label">New Password</label>
                                            <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="confirmPassword" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                                        </div>
                                        <button type="submit" class="btn btn-primary" onclick="cPassword();">Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add your dashboard content here -->

                    </div>
                </div>

            </div>



            <!-- Bootstrap JS -->

            <script src="../../js/sweetalert.js"></script>
            <script src="../../js/script.js"></script>
            <script src="../../js/bootstrap.bundle.js"></script>

    </body>

    </html>

<?php

} else {
    header('location: ../auth/SignIn.php');
}

?>