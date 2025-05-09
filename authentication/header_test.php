<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hela Handicrafts</title>
    <link rel="icon" href="resources/logoi.png" />

</head>

<body>

    <?php

    if (isset($_SESSION["u"])) {

    ?>

        <div class="col-12 p-1 bg-opacity-100 shadow-lg">

            <div class="row">

                <div class="d-none d-lg-block col-lg-6 mt-3">

                    <div class="row">

                        <!-- top navbar -->


                        <div class="col-1 ms-1">
                            <i class="fa-brands fa-twitter fs-4" style="cursor: pointer;"></i>
                        </div>
                        <div class="col-1">
                            <i class="fa-brands fa-facebook fs-4" style="cursor: pointer;"></i>
                        </div>
                        <div class="col-1">
                            <i class="fa-brands fa-pinterest fs-4" style="cursor: pointer;"></i>
                        </div>

                        <!-- top navbar -->
                    </div>

                </div>

                <div class="col-12 col-lg-6 mt-2">

                    <div class="row align-items-center justify-content-end">

                        <div class="d-none d-lg-block col-lg-1 me-1">

                            <button class="button rounded-5" type="button">

                                <i class="fa-regular fa-heart fs-4" style="cursor: pointer;"></i>

                            </button>

                        </div>

                        <div class="col-1 me-5 me-lg-1">

                            <button class="button rounded-5" type="button">

                                <i class="fa-sharp fa-regular fa-bell fs-4"></i>

                            </button>

                        </div>

                        <div class="col-2 me-3 ms-lg-1 mb-1">

                            <div class="dropdown">

                                <button class="button2 dropdown-toggle rounded-pill" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="ture" data-bs-auto-close="outside">

                                    <i class="fa-regular fa-user fs-4" style="cursor: pointer;"></i>

                                </button>

                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item mt-1" href="../userPublicProfile.php"><i
                                                class="fa-regular fa-user fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;My
                                            Profile</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="../auth/auth.php"><i
                                                class="fa-solid fa-house fa-flip fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-cart-shopping fa-beat-fade fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cart</a>
                                    </li>
                                    <li><a class="dropdown-item" href="addProduct.php"><i
                                                class="fa-solid fa-list-check fa-bounce fs-5"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;Purchased
                                            History</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-star fa-flip fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                                            </>My Reviews</a></li>
                                    <li><a class="dropdown-item" href="myProducts.php"><i
                                                class="fa-solid fa-heart fa-beat fs-5"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;Watchlist</a>
                                    </li>
                                    <hr>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-message fa-beat-fade fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;Message
                                            Center</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-tag fa-bounce fs-5"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;Special
                                            Offers</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-ticket fa-flip fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;My
                                            Coupons</a></li>
                                    <li><a class="dropdown-item" href="#"><i
                                                class="fa-solid fa-shop fa-beat fs-5"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;Sell
                                            on Hela Handicrafts</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="userProfileSettings.php"><i
                                                class="fa-solid fa-gear fa-spin fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;Account
                                            Settings</a></li>
                                    <li>
                                        <d class="dropdown-item mb-1" style="cursor: pointer;"
                                            onclick="signout();"><i
                                                class="fa-solid fa-arrow-right-from-bracket fa-fade fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sign
                                            Out</d>
                                    </li>

                                </ul>

                            </div>

                        </div>

                        <div class="d-none d-lg-block col-lg-1 me-3">

                            <button class="button2 rounded-pill" type="button">

                                <i class="fa-solid fa-cart-shopping fs-4" style="cursor: pointer;"></i>

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        </div>

        </div>

    <?php

    } else {

    ?>

        <div class="col-12">

            <div class="row p-1">

                <div class="col-12">

                    <div class="row">

                        <div class="d-none d-lg-block col-lg-6 mt-3">

                            <div class="row">

                                <!-- top navbar -->


                                <div class="col-1 ms-1">
                                    <i class="fa-brands fa-twitter fs-4" style="cursor: pointer;"></i>
                                </div>
                                <div class="col-1">
                                    <i class="fa-brands fa-facebook fs-4" style="cursor: pointer;"></i>
                                </div>
                                <div class="col-1">
                                    <i class="fa-brands fa-pinterest fs-4" style="cursor: pointer;"></i>
                                </div>

                                <!-- top navbar -->
                            </div>

                        </div>

                        <div class="col-12 col-lg-6 mt-2">

                            <div class="row align-items-center justify-content-end">

                                <div class="d-none d-lg-block col-lg-1 me-2">

                                    <button class="button rounded-5" type="button">

                                        <i class="fa-regular fa-heart fs-4" style="cursor: pointer;"></i>

                                    </button>

                                </div>

                                <div class="col-lg-3 col-9 d-grid me-5">

                                    <div class="row mb-1">

                                        <button type="button" class="btn btn-outline-warning btn-signin justify-content-center" data-bs-toggle="modal" data-bs-target="#loginModal">Sign In or Sign up</button>

                                    </div>

                                </div>

                                <div class="d-none d-lg-block col-lg-1 me-3">

                                    <button class="button2 rounded-pill" type="button">

                                        <i class="fa-solid fa-cart-shopping fs-4" style="cursor: pointer;"></i>

                                    </button>

                                </div>

                            </div>

                        </div>

                    </div>



                </div>

            <?php

        }

            ?>

            <!-- Modal -->
            <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg border-radius-lg">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="row m-0">
                                <!-- Background Image Section -->
                                <div class="col-md-6 p-0 bg-image d-none d-md-block">
                                    <img id="login-img-tag" src="../resources/login.jpg" class="w-100 h-100 object-fit-cover" alt="Woman making pottery">
                                </div>

                                <!-- Login/Signup Form Section -->
                                <div class="col-md-6 bg-light p-4">
                                    <div class="text-end">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <!-- Login Form -->
                                    <div id="loginForm">
                                        <div class="text-center mb-4">
                                            <h2 class="login-title">Login</h2>
                                        </div>
                                        <form>
                                            <div class="mb-3">
                                                <input type="email" class="form-control" id="signInEmail" placeholder="Email" required>
                                            </div>
                                            <div class="mb-3">
                                                <input type="password" class="form-control" id="signInPassword" placeholder="Password" required>
                                            </div>
                                            <div class="text-center mb-3">
                                                <a href="#" class="forgot-password">Forgot Password?</a>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100" onclick="signUp();">Login</button>
                                            <hr class="mt-4 mb-4">
                                            <p class="text-center">Or</p>
                                            <p class="text-center mb-3">New? Create an account</p>
                                            <button type="button" class="btn btn-secondary w-100" onclick="toggleForms()">Sign Up</button>
                                        </form>
                                    </div>

                                    <!-- Sign Up Form (Hidden by default) -->
                                    <div id="signupForm" style="display: none;">
                                        <div class="text-center mb-4">
                                            <h2 class="login-title">Sign Up</h2>
                                        </div>
                                        <form>
                                            <div class="d-flex gap-2">

                                                <div class="mb-3 w-full ">
                                                    <input type="text" class="form-control" placeholder="Fast Name" required>
                                                </div>
                                                <div class="mb-3 w-full ">
                                                    <input type="text" class="form-control" placeholder="Last Name" required>
                                                </div>

                                            </div>

                                            <div class="mb-3">
                                                <input type="email" class="form-control" placeholder="Email" required>
                                            </div>

                                            <div class="mb-3">
                                                <input type="text" class="form-control input-box" placeholder="Mobile" required>
                                            </div>

                                            <div class="mb-3">
                                                <input type="password" class="form-control" placeholder="Password" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">Create Account</button>
                                            <hr class="mt-4 mb-4">
                                            <p class="text-center">Already have an account?</p>
                                            <button type="button" class="btn btn-secondary w-100" onclick="toggleForms()">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="../js/script.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</body>

</html>