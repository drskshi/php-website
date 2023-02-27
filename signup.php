<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
    <div class="panel panel-primary">
    <div class="panel panel-heading">
  <h2>Signup to hotel national park</h2>
</div>

<div class="panel panel-body">
  <form method="post" action="?">

    <div class="form-group">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
    </div>

    <div class="form-group">
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
    </div>

    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Create Account</button>
        <button type="reset" class="btn btn-danger">Cancel</button>
    </div>   
    
  </form>
  <?php
  include 'connection.php';
  if(isset($_POST['submit']))
  {
    $a=$_POST['fname'];
    $b=$_POST['lname'];
    $c=$_POST['username'];
    $d=$_POST['password'];
    $d=md5($d);

    $query="insert into users(first_name,last_name,username,password)values('$a','$b','$c','$d')";
    $run=mysqli_query($conn,$query);
    if($run)
    {
      echo "<script>window.alert('sign up successfull!')</script>";
    }
    else{
     echo "<script>window.open('sign up not successfull!')</script>";
    }
  }

  mysqli_close($conn);
  ?>

</div>
</div>
</div>
 </body>
</html>
