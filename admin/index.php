<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome To Hotel National Park</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/mystyle1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"> </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
        <form action="" method="post" class="form-container">
            <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="username" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="passowrd">Password:</label>
            <input type="text" name="password" placeholder="Password" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
            </div>

        </form>
        <?php
        include 'connection.php';
        if(isset($_POST['submit']))
        {
          $a=$_POST['username'];
          $b=$_POST['password'];
          $b=md5($b);
          $query="select * from users where username='$a' and password='$b'";
          $run=mysqli_query($conn,$query);
          if(mysqli_num_rows($run)>0)
          {
            $_SESSION['username']=$a;
            echo"<script>window.open('main.php','_self')</script>";
          }
          else{
           echo"<script>window.open('main.php','_self')</script>";
          }

          
        }
       
        ?>
        <div>
        <div class="col-md-4 col-sm-4 col-xs-12"> </div>
       
    </div>
</body>
</html>