<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery of Hotel National Park</title>
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
  <h2>Photo Gallery</h2>
  </div>
<!-- title end-->
<!-- content rightbar start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <h2>Hotel National Park </h2>
        </div>
        <div class="panel panel-body">
          <?php
         $dir=glob('img/{*.png,*.jpg,*.jpeg}',GLOB_BRACE);
         foreach($dir as $value)
         {
          ?>
          <a href="<?php echo $value; ?>">
            <img src="<?php echo $value; ?>" alt="HNP" width="250px" height="200px" align="left" hspace="5px" vspace="5px" class="img-thumbnail">
          </a>
          <?php
         }
         ?>
        </div>
        </div>        
        </div>
       
    <div class="col-md-4">
     <div class="panel panel-primary">
       <div class="panel panel-heading">
         <h2>Photo Gallery</h2>
       </div>
       <div class="panel panel-body">
        <a href="gallery.html">
          <img src="images/slide3.jpg" class="img-thumbnail">
        </a>
         
       </div>
       <div class="panel panel-heading">
         <h2>News and Events</h2>

       </div>
       <div class="panel panel-body">
       <?php
         include 'newslink.php';

        ?>
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
