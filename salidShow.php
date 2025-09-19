<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Handicraft Slideshow</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div id="handicraftCarousel" class="carousel slide" data-bs-ride="carousel">
  
  <!-- Slides -->
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="resources/homeImages/textiles and clothing.jpg" class="d-block w-100" alt="Wood Crafts">
      <div class="carousel-caption d-none d-md-block">
        <h5>Unique Wooden Crafts</h5>
        <p>Beautifully crafted from natural wood by local artisans.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="resources/homeImages/textiles and clothing.jpg" class="d-block w-100" alt="Textiles">
      <div class="carousel-caption d-none d-md-block">
        <h5>Traditional Textiles</h5>
        <p>Handwoven fabrics with rich cultural heritage.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="resources/homeImages/textiles and clothing.jpg" class="d-block w-100" alt="Pottery">
      <div class="carousel-caption d-none d-md-block">
        <h5>Clay Pottery</h5>
        <p>Timeless clay works that bring elegance to your home.</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#handicraftCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#handicraftCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
