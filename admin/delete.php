<?php
include 'connection.php';
if(isset($_GET['Del']))
{
    $delid=$_GET['Del'];
    $query="delete from reservation where id='$delid'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        header("location:view_reservation.php");
    }
    else
    {
       echo "<script><?php echo 'Not deleted' ?></script>";
    }
}
mysqli_close($conn);
?>