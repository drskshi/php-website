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
  <h2>Contact Us</h2>
  
</div>
<!-- title end-->
<!-- content rightbar start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-8">
      <div class="panel panel-primary">
        <div class="panel panel-heading">
          <h2>Contact Details</h2>

        </div>
        <div class="panel panel-body">
          <p>
          Hotel Manager/Chitwan National Park Safari co-ordinator <br>
          Name: Suraj Shreshtha <br>
          Phone: +977-56-580347, Mobile: +977-9845155749 <br>
          Email: peaceful.cottage0@gmail.com <br>
          URL: www.hotelnationalparksauraha.com.np

          <br><br>
          Managing Director <br>
          Balkrishna Shreshtha <br>
          Contact: +9779845043820 <br>
          Business man since 1990

        </p>

        </div>
        <div class="panel panel-heading">
          <h2>Send feedback to us</h2>
        </div>
        <div class="panel panel-body">
         <form action="" method="post">
           <div class="form-group">
             <label for="name">Name</label>
             <input type="text" name="fname" class="form-control" placeholder="Your Name" required>
             
           </div>
           <div class="form-group">
             <label for="sub">Subject:</label>                  
             <input type="text" name="subject" class="form-control" placeholder="Subject" required>
             
           </div>
           <div class="form-group">
             <label for="msg">Message: </label>
               <textarea name="message" rows="10" class="form-control" placeholder="Your message..." required></textarea>
            
           </div>
           <button type="submit" name="submit" class="btn btn-primary">send</button>
           <button type="reset"  class="btn btn-danger">Cancel</button>
         </form>
          <?php
          if(isset($_POST['submit']))
          {
            $to='dds.100durga@gmail.com';
            $fullname=$_POST['fname'];
            $sub=$_POST['subject'];
            $msg=$_POST['message'];
            $header='noreply@gmail.com';
            if(mail($to,$fullname,$sub,$msg,$header))
            {

              echo "<script>window.alert('Mail send Successfully')</script>";
            }
            else
            {
              echo "<script>window.alert('Not Successful')</script>";
            }
          }
          ?>
        </div>
        <div class="panel panel-heading">
          <h2>Google map</h2>
          
        </div>
        
        <div class="panel panel-body">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.4867235291745!2d84.49773011505923!3d27.578435882845632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994eee0c396e0ad%3A0xdc39cef896029989!2sHotel%20National%20Park%20Sauraha!5e0!3m2!1sen!2snp!4v1653640416176!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
        <img src="images/add1.gif" alt="advertise 1">
         <img src="images/add2.gif" alt="advertise 2">
         <img src="images/add3.gif" alt="advertise 3">
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
