<?php
session_start();

if (isset($_SESSION["u"])) {
    $session = $_SESSION["u"];
    $email = $session["email"];
?>

    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
            integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            /* Optional: tighten item thumbnail */
            .cart-thumb {
                width: 80px;
                height: 80px;
                object-fit: cover;
            }

            .qty-btn {
                width: 2.5rem;
            }

            .price-col {
                min-width: 90px;
                text-align: end;
            }

            .strike {
                text-decoration: line-through;
                opacity: .6;
            }
        </style>
    </head>

    <body class="bg-light">


        <?php include "navbar.php"; ?>

        <main class="container py-4">
            <h1 class="h3 mb-4">Your Cart</h1>

            <?php

            $rs = Database::search("SELECT *, `cart`.`id` AS `c_id`, `product`.`id` AS `p_id` FROM `cart` INNER JOIN `product` ON `cart`.`product_id` = `product`.`id` WHERE `users_email` = '" . $email . "'");
            $num = $rs->num_rows;
            if ($num == 0) {

            ?>

                <!-- Empty state (hidden by default) -->
                <div class="p-4 text-center" id="emptyState">
                    <p class="mb-1">Your cart is empty.</p>
                    <a href="index.php" class="btn btn-primary mt-2">Continue Shopping</a>
                </div>

            <?php

            } else {

            ?>



                <div class="row g-4">

                    <!-- Cart Items -->
                    <section class="col-12 col-lg-8">
                        <div class="card shadow-sm">
                            <div class="card-body p-0">
                                <!-- Header row (desktop) -->
                                <div class="d-none d-md-grid px-3 py-2 border-bottom"
                                    style="grid-template-columns: 1fr 3fr 2fr 1fr;">
                                    <div class="fw-semibold">Item</div>
                                    <div class="fw-semibold">Product</div>
                                    <div class="fw-semibold text-md-end">Quantity</div>
                                    <div class="fw-semibold text-md-end">Subtotal</div>
                                </div>
                                <?php

                                $i_count = 0;
                                $total = 0;

                                for ($i = 0; $i < $num; $i++) {
                                    $data = $rs->fetch_assoc();

                                    $q = $data["qty"];
                                    $p = $data["price"];

                                    $s = $q * $p;

                                    $subtotal = number_format($s, 2, '.', ',');

                                    $i_count+= $q;
                                    $total+= $s;
                                    
                                 
                                    
                                ?>
                                    <!-- Item -->
                                    <div class="p-3 d-grid align-items-center"
                                        style="grid-template-columns: 1fr 3fr 2fr 1fr;"
                                        data-item data-price="79.00">
                                        <div class="d-flex align-items-center gap-3">
                                            <img class="cart-thumb rounded" src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=600&auto=format&fit=crop" alt="Product B" />
                                        </div>
                                        <div>
                                            <div class="fw-semibold" data-title><?php echo $data["title"] ?></div>
                                            <div class="text-muted small">SKU: BH-8421</div>
                                            <button type="button" class="btn btn-link p-0 text-danger small mt-1" onclick="cartitemdelete(<?php echo $data['c_id'] ?>);" data-delete>Delete</button>
                                        </div>
                                        <div class="d-flex justify-content-md-end align-items-center gap-2 mt-2 mt-md-0">
                                            <button type="button" class="btn btn-outline-secondary qty-btn" data-decrease onclick="removeFromCart(<?php echo $data['c_id'] ?>);">-</button>
                                            <input type="text" class="form-control text-center" readonly value="<?php echo $q ?>" inputmode="numeric" pattern="[0-9]*" style="max-width:4.25rem" data-qty>
                                            <button type="button" class="btn btn-outline-secondary qty-btn" data-increase onclick="addToCart(<?php echo $data['p_id'] ?>);">+</button>
                                        </div>
                                        <div class="price-col">
                                            <span class="fw-semibold" data-subtotal>Rs. <?php echo $subtotal ?></span>
                                        </div>
                                    </div>
                                <?php

                                }

                                ?>





                            </div>
                        </div>
                    </section>

                    <!-- Summary -->
                    <aside class="col-12 col-lg-4">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h2 class="h5">Order Summary</h2>
                                <div class="d-flex justify-content-between small text-muted">
                                    <span>Items</span>
                                    <span id="itemCount"><?php echo $i_count ?></span>
                                </div>
                                <!-- <div class="d-flex justify-content-between small text-muted">
                                    <span>Subtotal</span>
                                    <span id="subTotal">$197.90</span>
                                </div> -->
                                <!-- <div class="d-flex justify-content-between small text-muted">
                                    <span>Shipping</span>
                                    <span id="shipping">$0.00</span>
                                </div> -->
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="fw-semibold">Total</span>
                                    <span class="fs-5 fw-bold" id="grandTotal">Rs. <?php echo  number_format($total, 2, '.', ','); ?></span>
                                </div>
                                <button class="btn btn-primary w-100 mt-3" type="button">Checkout</button>
                            </div>
                        </div>
                    </aside>
                </div>

            <?php

            }

            ?>


        </main>



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