<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.12.1/font/bootstrap-icons.min.css">
    <link href="../../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 p-0">
                <?php include "sidemenu.php"; ?>
            </div>
            <div class="col-md-10">
                <div class="container py-3">
                    <h3 class="fw-bold text-center">User Management Profile</h3>
                    <hr>
                    

                    <!-- Search and Add User -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <input type="text" class="form-control w-50" placeholder="Search users...">
                        <button class="btn btn-primary">+ Add User</button>
                    </div>

                    <!-- User Table -->
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <table class="table table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>john_doe</td>
                                        <td>john@example.com</td>
                                        <td>Admin</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-warning">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>jane_smith</td>
                                        <td>jane@example.com</td>
                                        <td>User</td>
                                        <td><span class="badge bg-secondary">Inactive</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-warning">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <!-- more rows here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script src="../../js/bootstrap.bundle.js"></script>
    <script src="../../js/script.js"></script>
</body>