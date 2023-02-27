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
<div class="container-fluid">
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
       <h2>View All Reservation<h2>
      </div>
      <div class="panel panel-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
                <th>No. of Rooms</th>
                <th>Room Types</th>
                <th>Edit</th>            
                
                <th>Delete</th>
              </tr>
            </thead>
            <?php
              include 'connection.php';
              $query=" select * from reservation";
              $run=mysqli_query($conn,$query);
              while($row=mysqli_fetch_array($run))
              {
                $a=$row['id'];
                $b=$row['first_name'];
                $c=$row['last_name'];
                $d=$row['address'];
                $e=$row['phone'];
                $f=$row['email'];
                $g=$row['number'];
                $h=$row['room'];


              
            ?>
            <tbody>
              <td> <?php echo $a;  ?></td>
              <td> <?php echo $b;  ?> </td>
              <td> <?php echo $c;  ?></td>
              <td> <?php echo $d;  ?></td>
              <td> <?php echo $e;  ?></td>
              <td> <?php echo $f;  ?></td>
              <td> <?php echo $g;  ?></td>
              <td> <?php echo $h;  ?></td>
              <td><a href="edit.php?id=<?php echo $a; ?>&fname=<?php echo $b; ?>&lname=<?php echo $c; ?>&address=<?php echo $d;
               ?>&phone=<?php echo $e; ?>&email=<?php echo $f; ?>&number=<?php echo $g;?>&room=<?php echo $h; ?>">Edit</td>
              <td><a href="delete.php?Del=<?php echo $a; ?>">Delete</a></td>
            </tbody>
            <?php
              }
              ?>
          </table>  
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
