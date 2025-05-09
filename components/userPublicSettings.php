<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile Settings</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Profile Settings Container -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2>User Profile Settings</h2>
            <form>
                <!-- Personal Information Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        Personal Information
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="phoneNumber">Phone Number</label>
                            <input type="text" class="form-control" id="phoneNumber" placeholder="Enter your phone number">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </div>
                <!-- Change Password Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        Change Password
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="currentPassword">Current Password</label>
                            <input type="password" class="form-control" id="currentPassword" placeholder="Enter current password">
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" class="form-control" id="newPassword" placeholder="Enter new password">
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm new password">
                        </div>
                        <button type="submit" class="btn btn-primary">Change Password</button>
                    </div>
                </div>
                <!-- Privacy Settings Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        Privacy Settings
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="profileVisibility">
                            <label class="form-check-label" for="profileVisibility">Make Profile Public</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="activityVisibility">
                            <label class="form-check-label" for="activityVisibility">Show Activity Status</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </div>
                </div>
                <!-- Notification Settings Section -->
                <div class="card mb-4">
                    <div class="card-header">
                        Notification Settings
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="emailNotifications">
                            <label class="form-check-label" for="emailNotifications">Email Notifications</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="smsNotifications">
                            <label class="form-check-label" for="smsNotifications">SMS Notifications</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-light text-center text-lg-start mt-5">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">E-Commerce</h5>
                <p>
                    Your go-to platform for all your shopping needs.
                </p>
            </div>
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Follow Us</h5>
                <a href="#" class="btn btn-primary btn-sm mx-1">Facebook</a>
                <a href="#" class="btn btn-info btn-sm mx-1">Twitter</a>
                <a href="#" class="btn btn-danger btn-sm mx-1">Instagram</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
