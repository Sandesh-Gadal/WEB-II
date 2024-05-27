<?php
$con = new mysqli("localhost","root","","bca");

if (isset($_GET["ID"])) {
    $id = $_GET["ID"];
    $query= "select * from post where ID = $id ";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?>
            <div class="item">
    <img src="images/<?=$row["thumbnail"]?>" alt="post-img">
    <h3><a href="postdetail.php?id=<?=$row["ID"]?>"><?=$row["heading"]?></a></h3>
    <h5><?=$row["sub_heading"]?></h5>
    <p><?=$row["description"]?></p>  <span >Published at:<?=$row["created_at"]?></span>
    <span>By:<?=$row["created_by"]?></span>
</div>
<?php
        } 
    } else {
        echo "No Record Found";
    }
    ?>
    </div>  
    <?php
}
?>   
<style>
    body{
        display: flex;
        
        justify-content: center;
    }
img{
    width: 500px;
}
</style>
    


