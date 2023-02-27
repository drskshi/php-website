<?php
session_start();
if(!isset($_SESSION['username']))
{
  header("location:login.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Control Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/mystyle.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- navbar start -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li style="text-transform:uppercase"><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username']; ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar end -->
<!-- dashboard start-->
<div class="container">
<div class="row">
  <div class="col-md-4">
    <div class="panel panel-primary">
      <div class="panel panel-heading">
        <h2> <a href="main.php">Dashboard</h2>
      </div>
      <div class="panel panel-body">
        <a href="upload-image.php" class="btn btn-info btn-block">Upload Image</a>
        <a href="post.php" class="btn btn-info btn-block">Add new post</a>
        <a href="comments.php" class="btn btn-info btn-block">View Comments</a>
        <a href="view_reservation.php" class="btn btn-info btn-block">View Reservation</a>
        <a href="user_settings.php" class="btn btn-info btn-block">Manage User</a>
        
      </div>
    </div>
  </div>
  <div class="col-md-8">
    <div class="panel panel-danger">
      <div class="panel panel-heading">
       <h2>Edit Reservation Information<h2>
      </div>
      <div class="panel panel-body">
      <form method="get" action="edit_reservation.php">
            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" name="id1" placeholder="ID" class="form-control" value="<?php echo $_GET['id']; ?>">
            </div>
            <div class="form-group">
              <label for="first name">
                First Name
              </label>
              <input type="text" name="fname1" placeholder="First Name" class="form-control" value="<?php echo $_GET['fname']; ?>">
            </div>
            <div class="form-group">
              <label for="Last name">
                Last Name
              </label>
              <input type="text" name="lname1" placeholder="last name" class="form-control" value="<?php echo $_GET['lname']; ?>">
            </div>
            <div class="form-group">
              <label for="Address">
                Address
              </label>
              <input type="text" name="address1" placeholder="Address" class="form-control" value="<?php echo $_GET['address']; ?>">
            </div>
            <div class="form-group">
              <label for="phone">
                phone
              </label>
              <input type="text" name="phone1" placeholder="phone" class="form-control" value="<?php echo $_GET['phone']; ?>">
            </div>
            <div class="form-group">
              <label for="email">
                Email
              </label>
              <input type="text" name="email1" placeholder="Email" class="form-control" value="<?php echo $_GET['email']; ?>">
            </div>
            <div class="form-group">
              <label for="number">
                No. of rooms
              </label>
              <input type="text" name="number1" placeholder="Number of rooms" class="form-control" value="<?php echo $_GET['number']; ?>">
            </div>
            <div class="form-group">
              <label for="Room Type">
                Room Type
              </label>
              <input type="text" name="room1" placeholder="Room Type" class="form-control" value="<?php echo $_GET['room']; ?>">
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn btn-success btn-lg">Update</button>
              <button type="submit" name="submit" class="btn btn-danger btn-lg">Cancel</button>
            </div>
        </form>
            
      </div>
    </div>
  </div>
</div>

</div>
<!--dashboard end  --> 

</body>
</html>
<?php
}
?>
