<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome To Hotel National Park</title>
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
  <h2>Reservation</h2>
  
</div>
<!-- title end-->
<!-- content rightbar start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <h2>Book Hotel Room</h2>
        </div>
        <div class="panel panel-body">
          <p>
            <form method="post" action="">
            <div class="form-group">
              <label for="first name">
                First Name
              </label>
              <input type="text" name="fname" placeholder="First Name" class="form-control">
            </div>
            <div class="form-group">
              <label for="Last name">
                Last Name
              </label>
              <input type="text" name="lname" placeholder="last name" class="form-control">
            </div>
            <div class="form-group">
              <label for="Address">
                Address
              </label>
              <input type="text" name="address" placeholder="Address" class="form-control">
            </div>
            <div class="form-group">
              <label for="phone">
                phone
              </label>
              <input type="text" name="phone" placeholder="phone" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">
                Email
              </label>
              <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <label for="number">
                No. of rooms
              </label>
              <input type="text" name="number" placeholder="Number of rooms" class="form-control">
            </div>
            <div class="form-group">
              <label for="Room Type">
                Room Type
              </label>
              <select name="roomtype" class="form-control">
                <option value="Standard">Standard Room</option>
                <option value="Queen Size Room">Queen Size</option>
                <option value="King  Room">King Size</option>
                <option value="Deluxe Room">Deluxe Room</option>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-success btn-lg">Send</button>
              <button type="submit" name="submit" class="btn btn-danger btn-lg">Cancel</button>
            </div>
          </form>
        </p>

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
  
</body>
  </html>
<?php
include'connection.php';
if(isset($_POST['submit']))
{
  $a=$_POST['fname'];
  $b=$_POST['lname'];
  $c=$_POST['address'];
  $d=$_POST['phone'];
  $e=$_POST['email'];
  $f=$_POST['number'];
  $g=$_POST['roomtype'];
  if($a==""||$b==""||$c==""||$d==""||$e==""||$f==""||$g=="")
  {
    echo "<script>window.alert('Some fields are empty')</script>";
  }
  else
  {
     $query="insert into reservation(first_name,last_name,address,phone,email,number,room)values('$a','$b','$c','$d','$e','$f','$g')";
     $run=mysqli_query($conn,$query);
     if($run)
     {
       echo "<script>window.alert('Reservation Successful')</script>";
     }
     else
     {
       echo "<script>window.alert('Not Successful')</script>";
     }
  } 
}
mysqli_close($conn);

?>
