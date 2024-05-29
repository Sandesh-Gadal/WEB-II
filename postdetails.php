<?php
$con = new mysqli("localhost","root","","bca");

$ID = $_GET["id"];

    $query= "select * from post where ID = $id ";
    $result = $con->query($query);
  
        $row = $result->fetch_assoc();
          ?>
            <div class="item">
    <img src="images/<?=$row["thumbnail"]?>" alt="post-img">
    <h3><a href="postdetail.php?id=<?=$row["ID"]?>"><?=$row["heading"]?></a></h3>
    <h5><?=$row["sub_heading"]?></h5>
    <p><?=$row["description"]?></p>  <span >Published at:<?=$row["created_at"]?></span>
    <span>By:<?=$row["created_by"]?></span>
</div>
    </div>  
 
<style>
    body{
        display: flex;
        
        justify-content: center;
    }
img{
    width: 500px;
}
</style>
    


