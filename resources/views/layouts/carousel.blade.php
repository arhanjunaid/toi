<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>

<!-- <div id="demo" class="carousel slide" data-ride="carousel" style="min-height:410px;"> -->

  <!-- Indicators -->
 <!--  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul> -->
  
  <!-- The slideshow -->
 <!--  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/banner.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="public/images/BV_Portal2.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="public/images/banner.jpg" alt="New York"class="d-block w-100">
    </div>
  </div>
 -->  
  <!-- Left and right controls -->
 <!--  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="min-height:210px;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/images/banner.jpg" alt="First slide"  style="min-height:410px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/images/banner.jpg" alt="Second slide" style="min-height:410px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/images/banner.jpg" alt="Third slide" style="min-height:410px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>
