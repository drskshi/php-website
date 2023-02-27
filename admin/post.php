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
       <h2>Add new post<h2>
      </div>
      <div class="panel panel-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <label for="content">Content:</label>
                    <textarea name="content"  rows="10" class="form-control" placeholder="Write content here" required></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Select Image:</label>
                    <input type="file" name="image" class="form-control" !required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg">Add Post</button>
                    <button type="reset" class="btn btn-danger btn-lg">Cancel</button>
                </div>
            </form>
            <?php
              
              if(isset($_POST['submit']))
              {
                include 'connection.php';
                $title=$_POST['title'];
                $content=$_POST['content'];
                $image_name=$_FILES['image']['name'];
                $image_typ=$_FILES['image']['type'];
                $image_tmp=$_FILES['image']['tmp_name'];
                move_uploaded_file("$image_tmp","images/$image_name"); 
                $query="insert into posts(title,content,photo)values('$title','$content','$image_name')";
                $run=mysqli_query($conn,$query);
                if($run)
                {
                  echo "<script>window.alert('Posts added successfully!')</script>";

                }
                else{
                  echo"<script>window.alert('Not added')</script>";
                }
                mysqli_close($conn);
              }
            ?>
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
