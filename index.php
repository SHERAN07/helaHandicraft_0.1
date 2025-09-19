<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <?php session_start(); ?>

    <?php include "navbar.php"; ?>

    <?php include "searchBar.php"; ?>

    <!-- Categories -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Shop by Category</h2>
            <div class="row g-4">
                <!-- Card -->
                <div class="col-md-3 col-6">
                    <div class="card text-white ">
                        <img src="resources/homeImages/WoodCrafts.jpg" class="card-img" alt="Handicraft">
                        <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                            <h5 class="card-title align-items-center justify-content-center">Wood Crafts</h5>
                            <p class="card-text">Crafted with love by local artisans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-white ">
                        <img src="resources/homeImages/textiles and clothing.jpg" class="card-img" alt="Handicraft">
                        <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                            <h5 class="card-title align-items-center justify-content-center">Textiles and Clothing</h5>
                            <p class="card-text">Crafted with love by local artisans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-white ">
                        <img src="resources/homeImages/Jewelry.png" class="card-img" alt="Handicraft">
                        <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                            <h5 class="card-title align-items-center justify-content-center">Jewelry</h5>
                            <p class="card-text">Crafted with love by local artisans.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-white ">
                        <img src="resources/homeImages/Pottery.jpg" class="card-img" alt="Handicraft">
                        <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                            <h5 class="card-title align-items-center justify-content-center">Pottery</h5>
                            <p class="card-text">Crafted with love by local artisans.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-5 bg-white rounded-3 shadow-sm">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Featured Products</h2>
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h6 class="card-title">Handmade Bowl</h6>
                            <p class="text-primary fw-bold">$25</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h6 class="card-title">Batik Scarf</h6>
                            <p class="text-primary fw-bold">$40</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h6 class="card-title">Clay Vase</h6>
                            <p class="text-primary fw-bold">$30</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h6 class="card-title">Wooden Mask</h6>
                            <p class="text-primary fw-bold">$50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<br>
    <!-- Just For You -->
    <section class="py-5 bg-white rounded-3 shadow-sm">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Just For You</h2>
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h6 class="card-title">Handmade Bowl</h6>
                            <p class="text-primary fw-bold">$25</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h6 class="card-title">Batik Scarf</h6>
                            <p class="text-primary fw-bold">$40</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h6 class="card-title">Clay Vase</h6>
                            <p class="text-primary fw-bold">$30</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card h-100 shadow-sm">
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product">
                        <div class="card-body text-center">
                            <h6 class="card-title">Wooden Mask</h6>
                            <p class="text-primary fw-bold">$50</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="js/sweetalert.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>