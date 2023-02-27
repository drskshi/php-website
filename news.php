<!DOCTYPE html>
<html lang="en">
<head>
  <title>News And Articles</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
</head>
<body>
  <!-- menu start -->
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>s
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hotel National Park</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li  ><a href="services.php">Services</a></li>
        <li><a href="activities.php">Activities</a></li>
         <li  class="active"><a href="gallery.php">gallery</a></li>
          <li><a href="reservation.php">Reservation</a></li>
           <li><a href="contact.php">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- menu end -->
<!-- title start -->
<div class="jumbotron text-center">
  <h2>News and Articles</h2>
  </div>
<!-- title end-->
<!-- content rightbar start -->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <?php
            include 'connection.php';
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $query="select * from posts where id='$id'";
            }
            $run=mysqli_query($conn,$query);
            while($row=mysqli_fetch_array($run))
                {
           $id=$row['id'];
           $title=$row['title'];
           $content=$row['content'];
           $photo=$row['photo'];
        ?>
                
        <div class="panel panel-heading">
        <h2><?php echo $title; ?></h2>
          
        </div>
        <div class="panel panel-body">
            <img src="images/<?php echo $photo; ?>" alt="news" class="img-thumbnail" width="100%">                          
            <?php echo $content; ?>
        </div>
        <?php
            }
        mysqli_close($conn);
        ?>
        
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <h2>PhotoGallery</h2>
        </div>
        <div class="panel panel-body">
          <a href="gallery.php">
            <img src="images/slide2.jpg" class="img-thumbnail">
          </a>
        </div>
        <div class="panel panel-heading">
          <h2>News and Events</h2>
        </div>
        <div class="panel panel-body">
          <p>This is news</p>
          <p>This is news</p>
          <p>This is news</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- content and rightbar end -->

<!-- content rightbar end -->
  <!-- footer  start -->
  <div class="jumbotron text-center">
    <p>All right reserved @Hotel National park</p>
  </div>
  <!-- footer end -->
    
  </div>
  
<body>
  <html>
