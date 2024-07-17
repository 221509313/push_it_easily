<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About MICWELLMEDIA</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    .website-card {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<?php include 'header.php' ?>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="jumbotron">
          <h1 class="display-4">Welcome to MICWELLMEDIA</h1>
          <p class="lead">We specialize in creating and selling high-quality websites tailored to your needs.</p>
          <hr class="my-4">
          <p>Whether you're a business or an individual, we have the perfect solution for you.</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 offset-md-2">
        <h2>Our Featured Websites</h2>
        <!-- Website List -->
        <div class="card-deck">
          <!-- Website 1 -->
          <div class="card website-card">
            <img src="images/E-commence.jpg" class="card-img-top" alt="Website 1">
            <div class="card-body">
              <h5 class="card-title">e-commerce website</h5>
              <p class="card-text">A beautiful website designed for small businesses. Includes 5 pages and basic SEO optimization.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">R999</small>
            </div>
          </div>
          <!-- Website 2 -->
          <div class="card website-card">
            <img src="images/social media one.jpg" class="card-img-top" alt="Website 2">
            <div class="card-body">
              <h5 class="card-title">e-commerce website</h5>
              <p class="card-text">An e-commerce website with advanced features such as product management and secure checkout.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">R2999</small>
            </div>
          </div>
          <!-- Add more websites as needed -->
          <div class="card website-card">
            <img src="images/portfolio.jpg" class="card-img-top" alt="Website 2">
            <div class="card-body">
              <h5 class="card-title">Portfolio website</h5>
              <p class="card-text">A Portfolio website with advanced features such as Animated Skills and experience.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">R1999</small>
            </div>
          </div>
           <!-- Add more websites as needed -->
          <div class="card website-card">
            <img src="images/Social media.jpg" class="card-img-top" alt="Website 2">
            <div class="card-body">
              <h5 class="card-title">Social media website</h5>
              <p class="card-text">A Social-media website with advanced features such as texting  and posting Content.</p>
            </div>
            <div class="card-footer">
              <small class="text-muted">R60 000</small>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
 <div class="contact mt-3" style="border: 2px solid grey;">
    <h3 >If interested contact us:</h3>
 <a href="contact.php" class="btn btn-primary" style="margin-left:45%; margin-bottom:20px;">Contact Us</a>
 </div>
  </div>

  <?php include 'footer.php' ?>
  <!-- Bootstrap JS (optional) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
