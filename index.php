<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
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
    <br>
    <!-- Carousel -->
    <div class="container align-items-center justify-content-center d-flex">
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade mt-3 col-9" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="resources/categoryInHomePage/WoodCrafts.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resources/categoryInHomePage/Jewelry.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="resources/categoryInHomePage/textiles and clothing.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


        <!-- Categories -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-4">Shop by Category</h2>
                <div class="row g-4">
                    <!-- Card -->
                    <!--1-->
                    <div class="col-md-3 col-6">
                        <div class="card text-white ">
                            <img src="resources/categoryInHomePage/WoodCrafts.jpg" class="card-img" alt="Handicraft">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <h5 class="card-title align-items-center justify-content-center">Wood Crafts</h5>
                                <p class="card-text">Crafted with love by local artisans.</p>
                            </div>
                        </div>
                    </div>
                    <!--2-->
                    <div class="col-md-3 col-6">
                        <div class="card text-white ">
                            <img src="resources/categoryInHomePage/Textile & Fabric Crafts.jpg" class="card-img" alt="Handicraft">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <h5 class="card-title align-items-center justify-content-center">Textile & Fabric Crafts</h5>
                                <p class="card-text">Every stitch tells a story.</p>
                            </div>
                        </div>
                    </div>
                    <!--3-->
                    <div class="col-md-3 col-6">
                        <div class="card text-white ">
                            <img src="resources/categoryInHomePage/Jewelry.png" class="card-img" alt="Handicraft">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <h5 class="card-title align-items-center justify-content-center">Jewelry</h5>
                                <p class="card-text">Handcrafted sparkle, made for you.</p>
                            </div>
                        </div>
                    </div>
                    <!--4-->
                    <div class="col-md-3 col-6">
                        <div class="card text-white ">
                            <img src="resources/categoryInHomePage/Pottery.jpg" class="card-img" alt="Handicraft">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <h5 class="card-title align-items-center justify-content-center">Pottery</h5>
                                <p class="card-text">Nature’s clay, artist’s touch.</p>
                            </div>
                        </div>
                    </div>
                    <!--5-->
                    <div class="col-md-3 col-6">
                        <div class="card text-white ">
                            <img src="resources/categoryInHomePage/Painting & Decorative.jpg" class="card-img" alt="Handicraft">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <h5 class="card-title align-items-center justify-content-center">Painting & Decorative</h5>
                                <p class="card-text">Colors that tell a story.</p>
                            </div>
                        </div>
                    </div>
                    <!--6-->
                    <div class="col-md-3 col-6">
                        <div class="card text-white ">
                            <img src="resources/categoryInHomePage/Gifts.jpg" class="card-img" alt="Handicraft">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <h5 class="card-title align-items-center justify-content-center">Gifts</h5>
                                <p class="card-text">Unique creations for your special ones.</p>
                            </div>
                        </div>
                    </div>
                    <!--7-->
                    <div class="col-md-3 col-6">
                        <div class="card text-white ">
                            <img src="resources/categoryInHomePage/Metal Handicrafts.jpg" class="card-img" alt="Handicraft">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <h5 class="card-title align-items-center justify-content-center">Metal Handicrafts</h5>
                                <p class="card-text">Crafted in fire, shaped with passion.</p>
                            </div>
                        </div>
                    </div>
                    <!--8-->
                    <div class="col-md-3 col-6">
                        <div class="card text-white ">
                            <img src="resources/categoryInHomePage/Clothing.jpeg" class="card-img" alt="Handicraft">
                            <div class="card-img-overlay d-flex flex-column justify-content-end bg-dark bg-opacity-50">
                                <h5 class="card-title align-items-center justify-content-center">Clothing</h5>
                                <p class="card-text">Every stitch tells a story.</p>
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
                            <img src="resources/categoryInHomePage/hand made bolw.jpg" class="card-img-top" alt="Product">
                            <div class="card-body text-center">
                                <h6 class="card-title">Handmade Bowl</h6>
                                <p class="text-primary fw-bold">$25</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card h-100 shadow-sm">
                            <img src="resources/categoryInHomePage/Handwoven Cotton Scarf.webp" class="card-img-top" alt="Product">
                            <div class="card-body text-center">
                                <h6 class="card-title">Batik Scarf</h6>
                                <p class="text-primary fw-bold">$40</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card h-100 shadow-sm">
                            <img src="resources/categoryInHomePage/Clay Vase.jpg" class="card-img-top" alt="Product">
                            <div class="card-body text-center">
                                <h6 class="card-title">Clay Vase</h6>
                                <p class="text-primary fw-bold">$30</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card h-100 shadow-sm">
                            <img src="resources/categoryInHomePage/Wooden Mask.webp" class="card-img-top" alt="Product">
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
                            <img src="resources/categoryInHomePage/Wooden Wall Clock.jpg" class="card-img-top" alt="Product">
                            <div class="card-body text-center">
                                <h6 class="card-title">Wooden Wall Clock</h6>
                                <p class="text-primary fw-bold">$25</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card h-100 shadow-sm">
                            <img src="resources/categoryInHomePage/Batik Shirt.webp" class="card-img-top" alt="Product">
                            <div class="card-body text-center">
                                <h6 class="card-title">Batik Shirt</h6>
                                <p class="text-primary fw-bold">$40</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card h-100 shadow-sm">
                            <img src="resources/categoryInHomePage/Brass Oil Lamp.jpg" class="card-img-top" alt="Product">
                            <div class="card-body text-center">
                                <h6 class="card-title">Brass Oil Lamp</h6>
                                <p class="text-primary fw-bold">$30</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card h-100 shadow-sm">
                            <img src="resources/categoryInHomePage/Sand Art Bottle.jpg" class="card-img-top" alt="Product">
                            <div class="card-body text-center">
                                <h6 class="card-title">Sand Art Bottle</h6>
                                <p class="text-primary fw-bold">$50</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <?php include "footer.php"; ?>


    <script src="js/sweetalert.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>