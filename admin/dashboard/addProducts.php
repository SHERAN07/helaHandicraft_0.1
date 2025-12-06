<?php
require "../../Database/connection.php";
session_start();

if (isset($_SESSION["ad"])) {
    $email = $_SESSION["ad"]["email"];

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link href="../../css/bootstrap.css" rel="stylesheet">
        <link href="../../css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">

    </head>

    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 p-0">
                    <?php include "sidemenu.php"; ?>
                </div>
                <div class="col-md-10">


                    <div class="container">

                        <h3 class="mt-3 fw-bold text-center">Products Management</h3>
                        <hr>
                        <!-- Add your dashboard content here -->


                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="my-2">Product Details</h6>
                            </div>
                            <div class="card-body">


                                <div class="row col-12">

                                    <div class="mb-3 ">
                                        <label for="productName" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" id="productName" placeholder="Enter product name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="productDescription" class="form-label">Product Description</label>
                                        <textarea class="form-control" id="productDescription" rows="3"
                                            placeholder="Enter product description"></textarea>
                                    </div>

                                    <div class="mb-3 col-3">
                                        <label for="productCategory" class="form-label">Product Category</label>
                                        <select class="form-select" id="productCategory">
                                            <option selected>Select category</option>
                                            <?php

                                            $rs = Database::search("SELECT * FROM `category`");
                                            $num = $rs->num_rows;
                                            for ($x = 0; $x < $num; $x++) {
                                                $data = $rs->fetch_assoc();
                                            ?>

                                                <option value="<?php echo $data["cat_id"] ?>"><?php echo $data["cat_name"] ?></option>

                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>

                                    <div class="mb-3 col-3">
                                        <label for="productCategory" class="form-label">Sub Category</label>
                                        <select class="form-select" id="productCategory">
                                            <option selected>Select category</option>
                                            <?php

                                            $rs = Database::search("SELECT * FROM `Sub_category`");
                                            $num = $rs->num_rows;
                                            for ($x = 0; $x < $num; $x++) {
                                                $data = $rs->fetch_assoc();
                                            ?>

                                                <option value="<?php echo $data["sub_cat_id"] ?>"><?php echo $data["sub_cat_name"] ?></option>

                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </div>

                                    <div class="mb-3  col-3">
                                        <label for="material" class="form-label">Material</label>
                                        <select class="form-select" id="productMaterial">
                                            <option selected>Select material</option>
                                            <?php

                                            $rs = Database::search("SELECT * FROM `material`");
                                            $num = $rs->num_rows;
                                            for ($x = 0; $x < $num; $x++) {
                                                $data = $rs->fetch_assoc();
                                            ?>

                                                <option value="<?php echo $data["mt_id"] ?>"><?php echo $data["mt_name"] ?></option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-3">
                                        <label for="color" class="form-label">Color</label>
                                        <select class="form-select" id="productColor">
                                            <option selected>Select color</option>
                                            <?php

                                            $rs = Database::search("SELECT * FROM `color`");
                                            $num = $rs->num_rows;
                                            for ($x = 0; $x < $num; $x++) {
                                                $data = $rs->fetch_assoc();
                                            ?>

                                                <option value="<?php echo $data["id"] ?>"><?php echo $data["name"] ?></option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-3">
                                        <label for="size" class="form-label">Size</label>
                                        <select class="form-select" id="productSize">
                                            <option selected>Select size</option>
                                            <?php

                                            $rs = Database::search("SELECT * FROM `size`");
                                            $num = $rs->num_rows;
                                            for ($x = 0; $x < $num; $x++) {
                                                $data = $rs->fetch_assoc();
                                            ?>

                                                <option value="<?php echo $data["sz_id"] ?>"><?php echo $data["sz_name"] ?></option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-3">
                                        <label for="brand" class="form-label">Brand</label>
                                        <select class="form-select" id="productBrand">
                                            <option selected>Select brand</option>
                                            <?php

                                            $rs = Database::search("SELECT * FROM `brand`");
                                            $num = $rs->num_rows;
                                            for ($x = 0; $x < $num; $x++) {
                                                $data = $rs->fetch_assoc();
                                            ?>

                                                <option value="<?php echo $data["br_id"] ?>"><?php echo $data["br_name"] ?></option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-3">
                                        <label for="itemCode" class="form-label">Item Code</label>
                                        <input type="text" class="form-control" id="itemCode"
                                            placeholder="Enter item code">
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <div></div>
                                <h6 class="my-2">Images <span style="color:rgb(125, 128, 132);">(Please upload all the image at once)</span></h6>
                            </div>
                            <div class="card-body">

                                <div class="row col-12 ">

                                    <div class="d-flex justify-content-center align-items-center card col-2 mx-auto" style="min-height: 200px;">
                                        <a href=""><i class="bi bi-plus-circle" style="font-size: 4rem; color: black"></i></a>
                                        <label class="mb-2" style="font-size: 0.9rem;">Main Image</label>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center card col-2 mx-auto">
                                        <a href=""><i class="bi bi-plus-circle" style="font-size: 4rem; color: black"></i></a>
                                        <label class="mb-2" style="font-size: 0.9rem;">Image 01</label>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center card col-2 mx-auto">
                                        <a href=""><i class="bi bi-plus-circle" style="font-size: 4rem; color: black"></i></a>
                                        <label class="mb-2" style="font-size: 0.9rem;">Image 02</label>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center card col-2 mx-auto">
                                        <a href=""><i class="bi bi-plus-circle" style="font-size: 4rem; color: black"></i></a>
                                        <label class="mb-2" style="font-size: 0.9rem;">Image 03</label>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center card col-2 mx-auto">
                                        <a href=""><i class="bi bi-plus-circle" style="font-size: 4rem; color: black"></i></a>
                                        <label class="mb-2" style="font-size: 0.9rem;">Image 04</label>
                                    </div>

                                    <!-- <div class="d-flex justify-content-end ">
                                        <button class="btn btn-dark w-25 my-3">Upload Images</button>
                                    </div> -->
                                </div>


                            </div>
                        </div>

                        <!-- Price, Quantity & Delivery Cost -->

                        <div class="card mb-4">
                            <div class="card-header">
                                <h6 class="my-2">Price, Quantity & Delivery Cost</h6>
                            </div>
                            <div class="card-body">
                                <div class="row col-12">
                                    <div class="mb-3 col-3">
                                        <label for="productPrice" class="form-label">Product Price</label>
                                        <div class="input-group">
                                            <label for="" class="input-box input-group-text">LKR</label>
                                            <input type="number" class="form-control" id="productPrice"
                                                placeholder="Enter Price Here">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-3">
                                        <label for="specialPrice" class="form-label">Special Price</label>
                                        <div class="input-group">
                                            <label for="" class="input-box input-group-text">LKR</label>
                                            <input type="number" class="form-control" id="productPrice"
                                                placeholder="Enter Special Price">
                                        </div>
                                    </div>
                                    <div class="mb-3 col-3">
                                        <label for="qauntity" class="form-label">Qauntity</label>
                                        <input type="number" class="form-control" id="productPrice"
                                            placeholder="Enter Qauntity">
                                    </div>
                                    <div class="mb-3 col-3">
                                        <label for="qauntity" class="form-label">C.Max Qauntity</label>
                                        <input type="number" class="form-control" id="productPrice"
                                            placeholder="Enter Qauntity">
                                    </div>
                                    <div class="mb-3 col-3">
                                        <label for="deliveryCost" class="form-label">Delivery Cost</label>
                                        <div class="input-group">
                                            <label for="" class="input-box input-group-text">LKR</label>
                                            <input type="number" class="form-control" id="deliveryCost"
                                                placeholder="Enter Delivery Cost">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Price, Quantity & Delivery Cost -->
                        <div class="mb-3">
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="../../js/bootstrap.bundle.js"></script>
            <script src="../../js/script.js"></script>
    </body>

    </html>

<?php
} else {
    header("Location: ../auth/SignIn.php");
    exit();
}

?>