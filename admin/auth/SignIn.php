<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="container-fluid d-flex justify-content-center align-items-center vh-100">

    <div class="row">
        <div class="col-md-4 offset-1">
            <img src="../../resources/Admin-login.png" class="img-fluid rounded-start w-100 h-100 object-fit-cover" alt="...">
        </div>
        <div class="card mb-3 col-md-6">
            <div class="row g-0">

                <div class="col-12">
                    <div class="card-body p-5">
                        <!-- Login Form -->
                        <div id="loginForm" class="m-auto">

                            <div class="text-center mb-5">
                                <h2 class="">Login</h2>
                            </div>

                            <div>
                                <?php

                                $email = "";
                                $password = "";
                                //set values for email and password if they are set in cookies
                                if (isset($_COOKIE["adminemail"])) {
                                    $email = $_COOKIE["adminemail"];
                                }

                                ?>

                                <div class="mb-3">
                                    <input type="email" class="form-control" placeholder="Email" id="adminEmail" value="<?php echo $email; ?>">
                                </div>
                                <div class="input-group mb-3">

                                    <input type="password" class="form-control" placeholder="Password" id="adminPassword" />
                                    <button class="input-group-text input-box" id="passicon5" onclick="showpasswordicon5();">
                                        <i class="fa-solid fa-eye-slash"></i>
                                    </button>

                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    <div class="form-check w-full mb-3">

                                        <input class="form-check-input" type="checkbox" id="adminRememberme" />
                                        <label class="form-check-label text-black">Remember Me</label>
                                    </div>

                                    <div class="text-center mb-3 w-full ">

                                        <a href="#" onclick="adminForgotPassword();" style="color: #FF5B40;" id="adminfp" class="forgot-password">Forgot Password?</a>
                                        <div class="spinner-border text-danger d-none" id="adminsp" role="status">
                                            <span class="visually-hidden">Loading...</span>
                                        </div>
                                    </div>
                                </div> 
                                <button type="submit" class="btn btn-danger w-100" style="background-color: #FF5B40;" id="otpv" onclick="adminSignIn();">OTP Verification
                                </button>
                                <button class="btn btn-danger d-none w-100" style="background-color: #FF5B40;" id="otpvsp" type="button" disabled>
                                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                    <span role="status">Loading...</span>
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vertically centered modal -->
    <div class="modal fade" id="adminfpmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="adminfpmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="adminfpLabel">Forget password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div id="adminfga" class="d-none">
                            <p class="alert alert-success" id="adminfgat"></p>
                        </div>
                        <div class="mb-3 input-group">
                            <label for="recipient-name" class="col-form-label">New Password:</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="anp">
                                <button class="input-group-text input-box" id="passicon6" onclick="showpasswordicon6();">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Re enter New Password:</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="arnp">
                                <button class="input-group-text input-box" id="passicon7" onclick="showpasswordicon7();">
                                    <i class="fa-solid fa-eye-slash"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Verification Code</label>
                            <input type="text" class="form-control" id="avc">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="adminResetPassword();">Reset your password</button>
                </div>
            </div>
        </div>
    </div>


    <script src="../../js/sweetalert.js"></script>
    <script src="../../js/script.js"></script>
    <script src="../../js/bootstrap.bundle.js"></script>
</body>

</html>