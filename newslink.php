<?php
  include 'connection.php';
 $query="select * from posts order by RAND() LIMIT 5";
            $run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($run))
        { 
           $id=$row['id']; 
           $title=$row['title'];
           $content=$row['content'];
           $photo=$row['photo'];
        
         ?>
         <div class="row">
          <div class="col-md-3">
            <img src="images/<?php echo $photo; ?>" alt="news" class="img-thumbnail">
          </div>
          <div class="col-md-9">
            <a href="news.php?id=<?php echo $id; ?>">
            <?php echo $title; ?>
            </a>
          </div>
         </div> 
         <?php
        }
        mysqli_close($conn);
         ?>