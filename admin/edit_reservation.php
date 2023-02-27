<?php
include 'connection.php';
if(isset($_GET['submit']))
{
   echo $a=$_GET['id1'];
   echo $b=$_GET['fname1'];
   echo $c=$_GET['lname1'];
   echo $d=$_GET['address1'];
   echo $e=$_GET['phone1'];
   echo $f=$_GET['email1'];
   echo $g=$_GET['number1'];
   echo $h=$_GET['room1'];
   $query="update reservation set first_name='$b', last_name='$c', address='$d', phone='$e', email='$f', number='$g', room='$h' where id='$a' ";
   $run=mysqli_query($conn,$query);
   if($run)
   {
    echo "<script>window.alert('Reservation successfull')</script>";
   }
   else{
   echo  "<script>window.alert('Not Successfull')</script>";
   }
}

?>