<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php session_start(); ?>

    <?php include "navbar.php"; ?>

    <!-- Profile Container -->
    <div class="container mt-5">
        <div class="row h-100">
            <div class="col-md-4">
                <!-- Profile Card -->
                <div class="card">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Profile Picture">
                    <div class="card-body">
                        <h5 class="card-title">John Doe</h5>
                        <p class="card-text">johndoe@example.com</p>
                        <p class="card-text"><strong>Phone:</strong> (123) 456-7890</p>
                        <p class="card-text"><strong>Address:</strong> 123 Main St, City, State, 12345</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS and dependencies -->
    <script src="js/sweetalert.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>