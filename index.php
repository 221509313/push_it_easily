<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>MICWELLMEDIA</title>
</head>

<body >
 
 
  <?php include 'header.php' ?>
  <!---sliding images--->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      
      <img src="images/background-1.jpg" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="images/background-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/background-3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!---cards---->
<div class="card-group  ms-5 mb-5 me-5 " >
  <div class="card ">
   
    <div class="card-body ">
      <h5 class="card-title">E-Commence/Social media Website</h5>
      <p class="card-text">1. Social Media Websites: Platforms that connect people worldwide, fostering communication, sharing of content, and social interaction in virtual communities. <br><br>
  
  2. E-commerce Websites: Digital marketplaces offering a vast array of products and services, enabling online transactions and commerce from the comfort of users' screens..</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
   
    <div class="card-body">
      <h5 class="card-title">Salon Website</h5>
      <p class="card-text">Salon websites offer a digital storefront for beauty and grooming services, showcasing their expertise, services, and appointment booking options to attract and engage clients..</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Portfolio Websites</h5>
      <p class="card-text">A portfolio website showcases an individual's or a professional's work, skills, and achievements, serving as a digital portfolio to attract potential clients or employers..</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
  <!--javascript links--->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>