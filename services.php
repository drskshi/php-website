<!DOCTYPE html>
<html lang="en">
<head>
  <title>Services of Hotel Nattional Park</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
  <!-- menu start -->
  <?php
    include 'menu.php';
  ?>
<!-- menu end -->
<!-- title start -->
<div class="jumbotron text-center">
  <h2>Our services</h2>
  
</div>
<!-- title end-->
<!-- content rightbar start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <h2>Hotel room</h2>
        </div>
        <div class="panel panel-body">
          <img src="images/s7.jpg" alt="room" class="img-thumbnail">
          <h2>Amenities</h2>
          <ul type="square">
              <li>AC room / Non AC room</li>
              <li>Attach toilet and bathroom</li>
              <li>Balcony</li>
              <li>River view</li>
              <li>Jungle view</li>
              <li>Restaurantn and Bar</li>
              <li>Free wifi</li>
              <li>TV</li>
              <li>Free Parking</li>
              <li>pet allowed</li>
          </ul>

        </div>
        <div class="panel panel-heading">
            <h2>Local Food</h2>
          
        </div>
        <div class="panel panel-body">
          <img src="images/s12.jpg" alt="food" class="img-thumbnail">
        </div>
        <div class="panel panel-heading">
          <h2>National Park Activities</h2>
        </div>
        <div class="panel panel-body">
         <img src="images/s13.jpg" alt="jeep safari">
        </div>
      </div>
    </div>
    <div class="col-md-4">
     <div class="panel panel-primary">
       <div class="panel panel-heading">
         <h2>Photo Gallery</h2>
       </div>
       <div class="panel panel-body">
       <a href="gallery.php">
          <img src="images/s10.jpg" class="img-thumbnail">
        </a>
         
       </div>
       <div class="panel panel-heading">
         <h2>News and Events</h2>

       </div>
       <div class="panel panel-body">
       <?php
         include 'newslink.php';

        ?>
         <img src="images/add1.gif" alt="advertise 1">
         <img src="images/add2.gif" alt="advertise 2">
         <img src="images/add3.gif" alt="advertise 3">
         <img src="images/add4.gif" alt="advertise 5">
         <img src="images/add5.gif" alt="advertise 5">
         
         
       </div>
     </div>
   </div>
  </div>
</div>

<!-- content rightbar end -->
  <!-- footer  start -->
  <?php
  include 'footer.php';
  ?>
  <!-- footer end -->
    
  </div>
  
<body>
  <html>
