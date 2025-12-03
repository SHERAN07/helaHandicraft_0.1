<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile | ShopEase</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- ====== Profile Section Start ====== -->
<div class="container py-5">

  <!-- Profile Header -->
  <div class="card mb-4 shadow-sm">
    <div class="card-body text-center">
      <img src="https://via.placeholder.com/120" alt="user-avatar" class="rounded-circle mb-3" width="120" height="120">
      <h4 class="fw-semibold mb-0">John Doe</h4>
      <p class="text-muted mb-3">@johndoe</p>
      <button class="btn btn-primary btn-sm me-2"><i class="bi bi-pencil"></i> Edit Profile</button>
      <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-box-arrow-right"></i> Logout</button>
    </div>
  </div>

  <div class="row g-4">
    <!-- Left Column -->
    <div class="col-lg-4">
      <div class="card shadow-sm">
        <div class="card-header bg-white fw-semibold">Account Details</div>
        <div class="card-body small">
          <p class="mb-2"><i class="bi bi-envelope text-primary"></i> john.doe@email.com</p>
          <p class="mb-2"><i class="bi bi-telephone text-primary"></i> +1 234 567 890</p>
          <p class="mb-2"><i class="bi bi-geo-alt text-primary"></i> 123 Main St, New York</p>
          <p><i class="bi bi-calendar text-primary"></i> Member since: Jan 2023</p>
        </div>
      </div>
    </div>

    <!-- Right Column -->
    <div class="col-lg-8">
      <div class="card shadow-sm mb-4">
        <div class="card-header bg-white fw-semibold">Recent Orders</div>
        <div class="card-body">
          <table class="table table-striped table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Product</th>
                <th>Date</th>
                <th>Status</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>101</td>
                <td>Wireless Headphones</td>
                <td>Oct 12, 2025</td>
                <td><span class="badge bg-success">Delivered</span></td>
                <td>$120</td>
              </tr>
              <tr>
                <td>102</td>
                <td>Smart Watch</td>
                <td>Oct 18, 2025</td>
                <td><span class="badge bg-warning text-dark">Pending</span></td>
                <td>$90</td>
              </tr>
              <tr>
                <td>103</td>
                <td>Gaming Mouse</td>
                <td>Oct 25, 2025</td>
                <td><span class="badge bg-info text-dark">Shipped</span></td>
                <td>$45</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="card shadow-sm">
        <div class="card-header bg-white fw-semibold">Saved Addresses</div>
        <div class="card-body small">
          <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-2">
            <div>
              <strong>Home</strong><br>
              123 Main St, New York, USA
            </div>
            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <strong>Office</strong><br>
              456 Market Ave, New York, USA
            </div>
            <button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- ====== Profile Section End ====== -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
