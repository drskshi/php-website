
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome To Hotel National Park</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
<?php
  include 'loader.php';

  ?>
  <!-- menu start -->
  <?php
  include 'menu.php';

  ?>
 
<!-- menu end -->
<!-- slide start -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/s1.jpg" alt="Chania" width="2000">
      <div class="carousel-caption">
        <h3>Welcome To Hotel National Park</h3>
        <p>The best budget hotel in Chitwan National Park</p>
      </div>
    </div>

    <div class="item">
      <img src="images/s2.jpg" alt="Chicago">
      <div class="carousel-caption">
        <h3>Friendly Environment</h3>
        <p>We got peaceful environment with friendly behaving services</p>
      </div>
    </div>

    <div class="item">
      <img src="images/s3.jpg" alt="New York">
      <div class="carousel-caption">
        <h3>Peaceful Environment</h3>
        <p>Enjoy the Warm hospitality with the view of nature and wild animals closely</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- slide end -->
<!-- welcome section start -->
<div class="jumbotron text-center">
  <h2>Welcome To Hotel National Park</h2>
  <p>Hotel National park is located at the heart of Sauraha,Chitwan.This hotel is very close to Chitwan National Park and famous river called Rapti river.The hotel is very close to the  Chitwan Nationak Park,it is just 10 minute wlaking distance to the Chitwan National Park entrance office and also the Rapti River.The hotel is located in the peaceful location where you can feel the quitness and calm during over stay.Hotel has a shared Balcony from where you can have a great view of Mountain,Sunrise and Sunset</p>
  <a class="btn btn-primary btn-lg" href="about.php"> Read More</a>

</div>
<!-- welcome section end -->
  <!-- offer section start -->
  <div class="jumbotron text-center">
  <div class="container">
    <h2 align="center"> We offer</h2>
    <p align="center">
      We offer various services in Hotel Natoinal Park Sauraha, Chitwan, Nepal
    </p>
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel panel-heading">
            <h2>Hotel Room</h2>
          </div>
          <div class="panel panel-body">
            <img src="images/s7.jpg" class="img-thumbnail">
            <p>
              We offer one of the best hotel rooms having availability of Wifi,attached bathroom, AC with 24 Hours 
            </p>
            <a class="btn btn-danger btn-lg" href="reservation.php">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel panel-heading">
            <h2>Restaurent and Bar</h2>
          </div>
          <div class="panel panel-body">
            <img src="images/s8.jpg" class="img-thumbnail">
            <p>
             We serve varieties of food and beverages in the Hotel Premises. Guest can enjoy eating fresh organic hotel garden vegetable during their stay.
            </p>
            <a class="btn btn-danger btn-lg" href="reservation.php">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-primary">
          <div class="panel panel-heading">
            <h2>Chitwan National Park Tours</h2>
          </div>
          <div class="panel panel-body">
            <img src="images/s9.jpg" class="img-thumbnail">
            <p>
            Building your pages using a drag and drop page builder is a great experience that will save you time. Time is valuable. Don't waste it.
            </p>
            <a class="btn btn-danger btn-lg" href="reservation.php">Book Now</a>   
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
  <!-- offer section end -->

<!-- content/rightbar start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <h2 >News And Articles</h2>
        </div>
      
        <?php
         include 'newslink.php';
        ?>
      </div>
    </div>
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <h2>photo gallery</h2>
        </div>
        <div class="panel panel-body">
          <a href="gallery.php">
          <img src="images/s10.jpg" class="img-thumbnail"></a>
          <img src="images/add1.gif" alt="advertise 1">
         <img src="images/add2.gif" alt="advertise 2">
        
          
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- content/rightbar end -->
  <!-- footer  start -->
  
  <?php
        include 'footer.php';
  ?>
  
  <!-- footer end -->
    
  
  <script>
  var loader=document.getElementById("preloader");
    window.addEventListener("load",function(){
    loader.style.display="none";
  })
</script>

</body>
  </html>
