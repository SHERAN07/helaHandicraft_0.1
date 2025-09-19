<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handicraft Advanced Search</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <?php session_start(); ?>

    <?php include "navbar.php"; ?>

    <div class="container py-5">
        <h2 class="text-center mb-4">🔍 Advanced Search</h2>

        <form class="card p-4 shadow-sm">
            <div class="row g-3">

                <!-- Keyword -->
                <div class="col-md-6">
                    <label for="keyword" class="form-label">Keyword</label>
                    <input type="text" class="form-control" id="keyword" placeholder="Enter product or artisan name">
                </div>

                <!-- Category -->
                <div class="col-md-6">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" id="category">
                        <option selected disabled>Choose...</option>
                        <option>Wood Crafts</option>
                        <option>Textile</option>
                        <option>Jewelry</option>
                        <option>Pottery</option>
                    </select>
                </div>

                <!-- Material -->
                <div class="col-md-6">
                    <label for="material" class="form-label">Material</label>
                    <select class="form-select" id="material">
                        <option selected disabled>Choose...</option>
                        <option>Wood</option>
                        <option>Metal</option>
                        <option>Clay</option>
                        <option>Fabric</option>
                    </select>
                </div>

                <!-- Color -->
                <div class="col-md-6">
                    <label for="color" class="form-label">Color</label>
                    <select class="form-select" id="color">
                        <option selected disabled>Choose...</option>
                        <option>Red</option>
                        <option>Black</option>
                        <option>Yellow</option>
                        <option>Blue</option>
                    </select>
                </div>

                <!-- Size -->
                <div class="col-md-6">
                    <label for="size" class="form-label">Size</label>
                    <select class="form-select" id="size">
                        <option selected disabled>Choose...</option>
                        <option>Extra Samll</option>
                        <option>Samll</option>
                        <option>Medium</option>
                        <option>Large</option>
                    </select>
                </div>

                <!-- Brand -->
                <div class="col-md-6">
                    <label for="brand" class="form-label">Brand</label>
                    <select class="form-select" id="brand">
                        <option selected disabled>Choose...</option>
                        <option>No Brand</option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>

                <!-- Price Range -->
                <div class="col-md-3">
                    <label for="minPrice" class="form-label">Min Price ($)</label>
                    <input type="number" class="form-control" id="minPrice" placeholder="0">
                </div>
                <div class="col-md-3">
                    <label for="maxPrice" class="form-label">Max Price ($)</label>
                    <input type="number" class="form-control" id="maxPrice" placeholder="500">
                </div>

                <!-- Sort By -->
                <div class="col-md-6">
                    <label for="sortBy" class="form-label">Sort By</label>
                    <select class="form-select" id="sortBy">
                        <option selected>Newest</option>
                        <option>Popularity</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-end mt-4">
                <button type="reset" class="btn btn-outline-secondary me-2 col-2">Reset</button>
                <button type="submit" class="btn btn-primary col-2">Search</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="js/script.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>