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
    <nav class="d-none d-md-flex flex-wrap py-3 justify-content-between px-5 align-items-center">

        <div class="d-flex justify-content-around gap-5 align-items-center">
            <div class="">
                <i class="fa-brands fa-twitter fs-4" style="cursor: pointer;"></i>
            </div>
            <div class="">
                <i class="fa-brands fa-facebook fs-4" style="cursor: pointer;"></i>
            </div>
            <div class="">
                <i class="fa-brands fa-pinterest fs-4" style="cursor: pointer;"></i>
            </div>
        </div>

        <div class="d-flex justify-content-around align-items-center gap-4">

            <div class="">
                <button class="button rounded-5" type="button">

                    <i class="fa-regular fa-heart fs-4" style="cursor: pointer;"></i>

                </button>
            </div>

            <?php

            if (isset($_SESSION["u"])) {
            ?>

                <div class="">
                    <button class="button rounded-5" type="button">

                        <i class="fa-sharp fa-regular fa-bell fs-4"></i>

                    </button>
                </div>
                <div class="">

                    <div class="dropdown">

                        <button class="button2 dropdown-toggle rounded-pill" type="button"
                            data-bs-toggle="dropdown" aria-expanded="ture" data-bs-auto-close="outside">

                            <i class="fa-regular fa-user fs-4" style="cursor: pointer;"></i>

                        </button>

                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item mt-1" href="../components/userPublicProfile.php"><i
                                        class="fa-regular fa-user fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;My
                                    Profile</a></li>
                            <hr>
                            <li><a class="dropdown-item" href="#"><i
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


            <?php

            } else {

            ?>
                <div class="">

                    <button type="button" class="btn btn-outline-warning btn-signin justify-content-center" data-bs-toggle="modal" data-bs-target="#loginModal1">Sign In or Sign up</button>

                </div>


            <?php

            }

            ?>

            <div class="d-block ">

                <button class="button2 rounded-pill" type="button">

                    <i class="fa-solid fa-cart-shopping fs-4" style="cursor: pointer;"></i>

                </button>

            </div>

        </div>
    </nav>

    <nav class="navbar bg-body-tertiary d-flex d-md-none">
        <div class="container-fluid py-2 px-4">


            <!-- <a class="  navbar-brand" href="#">Offcanvas navbar</a> -->
            <div class="d-flex justify-content-around gap-5 align-items-center">
                <div class="">
                    <i class="fa-brands fa-twitter fs-4" style="cursor: pointer;"></i>
                </div>
                <div class="">
                    <i class="fa-brands fa-facebook fs-4" style="cursor: pointer;"></i>
                </div>
                <div class="">
                    <i class="fa-brands fa-pinterest fs-4" style="cursor: pointer;"></i>
                </div>
            </div>



            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 gap-2">
                        <li class="nav-item">
                            <a class="nav-link active d-flex align-items-center justify-content-start gap-2" aria-current="page" href="#">
                                <i class="fa-brands fa-twitter fs-4" style="cursor: pointer;"></i> Twitter
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-facebook fs-4" style="cursor: pointer;"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa-brands fa-pinterest fs-4" style="cursor: pointer;"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <?php

                            if (isset($_SESSION["u"])) {
                            ?>

                                <div class="">
                                    <button class="button rounded-5" type="button">

                                        <i class="fa-sharp fa-regular fa-bell fs-4"></i>

                                    </button>
                                </div>
                                <div class="">

                                    <div class="dropdown">

                                        <button class="button2 dropdown-toggle rounded-pill" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="ture" data-bs-auto-close="outside">

                                            <i class="fa-regular fa-user fs-4" style="cursor: pointer;"></i>

                                        </button>

                                        <ul class="dropdown-menu">

                                            <li><a class="dropdown-item mt-1" href="userPublicProfile.php"><i
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
                        </li>
                        <li class="nav-item">

                        <?php

                            } else {

                        ?>
                            <div class="">

                                <button type="button" class="btn btn-outline-warning btn-signin justify-content-center" data-bs-toggle="modal" data-bs-target="#loginModal1">Sign In or Sign up</button>

                            </div>


                        <?php

                            }

                        ?>
                        </li>
                        <li class="nav-item d-flex justify-content-start align-items-center">
                            <button class="button2 rounded-pill" type="button">

                                <i class="fa-solid fa-cart-shopping fs-4" style="cursor: pointer;"></i>

                            </button>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="loginModal1" tabindex="-1" aria-labelledby="loginModal1Label" aria-hidden="true">
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
                                        <input type="email" class="form-control" placeholder="Email" id="signInEmail" required>
                                    </div>
                                    <div class="input-group mb-3">

                                        <input type="password" class="form-control" placeholder="Password" id="signInPassword" required>
                                        <button class="input-group-text input-box" id="passicon" onclick="showpasswordicon();">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>

                                    </div>
                                    <div class="d-flex justify-content-between mb-3">
                                        <div class="form-check w-full mb-3">

                                            <input class="form-check-input" type="checkbox" id="rememberme" />
                                            <label class="form-check-label text-black">Remember Me</label>

                                        </div>

                                        <div class="text-center mb-3 w-full ">

                                            <a href="#" onclick="forgotPassword();" class="forgot-password">Forgot Password?</a>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" onclick="signIn();">Login</button>

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

                                    <div class="d-flex gap-2">

                                        <div class="mb-3 w-full ">
                                            <input type="text" class="form-control" placeholder="Mobile" id="mobile" required>
                                        </div>

                                        <select class="form-control input-box mb-3 w-full"
                                            id="gender">
                                            <option value="0">Select Gender</option>

                                            <?php

                                            require "./Database/connection.php";

                                            $rs = Database::search("SELECT * FROM `gender`");

                                            $n = $rs->num_rows;

                                            for ($x = 0; $x < $n; $x++) {
                                                $d = $rs->fetch_assoc();

                                            ?>

                                                <option value="<?php echo $d["id"]; ?>"><?php echo $d["gender_name"]; ?></option>

                                            <?php

                                            }

                                            ?>

                                        </select>

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