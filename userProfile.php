<?php
session_start();

if (isset($_SESSION["u"])) {
    $session = $_SESSION["u"];
    $email = $session["email"];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <?php include "navbar.php"; ?>

        <!-- ====== Profile Section Start ====== -->
        <div class="container py-5">

            <!-- Profile Header -->
            <div class="card mb-4 shadow-sm">
                <div class="card-body text-center">
                    <div class="text-center mb-2">

                        <?php

                        $rs = Database::search("SELECT * FROM `userProfile` WHERE `users_email` = '" . $session["email"] . "'");

                        $path = "resources/userProfile/profile-img.jpg";

                        if ($rs->num_rows > 0) {

                            $path = $rs->fetch_assoc()["path"];
                        }
                        ?>

                        <img src="<?php echo $path ?>" alt="Profile Picture" class="img-thumbnail mt-4 rounded-circle my-2" style="width: 150px; height: 150px; object-fit: cover;">

                    </div>
                    <h4 class="fw-semibold mb-0">
                        <?php echo $session["fname"] . " " . $session["lname"]; ?>
                    </h4>
                    <div class="mt-3">
                        <button class="btn btn-primary btn-sm me-2" onclick="goToEditProfile();"><i class="bi bi-pencil"></i> Edit Profile</button>
                        <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-box-arrow-right" onclick="signout();"></i> Logout</button>
                    </div>

                </div>
            </div>

            <div class="row g-4">
                <!-- Left Column -->
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-white fw-semibold">Account Details</div>
                        <div class="card-body small">
                            <p class="mb-2"><i class="bi bi-envelope text-primary"></i> <?php echo $email ?> </p>
                            <p class="mb-2"><i class="bi bi-telephone text-primary"></i> <?php echo $session["mobile"]; ?></p>
                            <p class="mb-2"><i class="bi bi-geo-alt text-primary"></i>
                                <?php
                                $rs = Database::search("SELECT *, c.city_name AS cid, d.district_name AS did, p.province_name AS pid FROM user_has_address a INNER JOIN city c ON a.city_id = c.id INNER JOIN district d ON c.district_id = d.id INNER JOIN province p ON d.province_id = p.id WHERE `users_email` = '" . $email . "' ");

                                if ($rs->num_rows > 0) {
                                    $address_data = $rs->fetch_assoc();
                                    $address = $address_data["line1"] . ", " . $address_data["line2"] . ", " . $address_data["cid"] . ", " . $address_data["did"] . ", " . $address_data["pid"];


                                ?>

                                    <?php echo $address ?>

                                <?php

                                }

                                ?></p>
                            <p><i class="bi bi-calendar text-primary"></i> Member since: <?php echo $session["joined_date"]; ?></p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-8">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header bg-white fw-semibold">Recent Orders</div>
                        <div class="card-body">
                            <table class="table table-striped table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>101</td>
                                        <td>Wireless Headphones</td>
                                        <td>Oct 12, 2025</td>
                                        <td><span class="badge bg-success">Delivered</span></td>
                                        <td>$120</td>
                                    </tr>
                                    <tr>
                                        <td>102</td>
                                        <td>Smart Watch</td>
                                        <td>Oct 18, 2025</td>
                                        <td><span class="badge bg-warning text-dark">Pending</span></td>
                                        <td>$90</td>
                                    </tr>
                                    <tr>
                                        <td>103</td>
                                        <td>Gaming Mouse</td>
                                        <td>Oct 25, 2025</td>
                                        <td><span class="badge bg-info text-dark">Shipped</span></td>
                                        <td>$45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-header bg-white fw-semibold">Saved Addresses</div>
                        <div class="card-body small">
                            <div class="d-flex justify-content-between align-items-center pb-2 mb-2">
                                <div>
                                    <strong>Home</strong><br>
                                    <?php
                                    $rs = Database::search("SELECT *, c.city_name AS cid, d.district_name AS did, p.province_name AS pid FROM user_has_address a INNER JOIN city c ON a.city_id = c.id INNER JOIN district d ON c.district_id = d.id INNER JOIN province p ON d.province_id = p.id WHERE `users_email` = '" . $email . "' ");

                                    if ($rs->num_rows > 0) {
                                        $address_data = $rs->fetch_assoc();
                                        $address = $address_data["line1"] . ", " . $address_data["line2"] . ", " . $address_data["cid"] . ", " . $address_data["did"] . ", " . $address_data["pid"];


                                    ?>

                                        <?php echo $address ?>

                                    <?php

                                    }

                                    ?>
                                </div>
                                <button class="btn btn-sm btn-outline-primary" onclick="goToAddressSettings();"><i class="bi bi-pencil"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- ====== Profile Section End ====== -->

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