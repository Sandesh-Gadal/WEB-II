<?php

include "db.php";
// require "db.php";
$con= db_connect();
session_start();
// $con = new mysqli("localhost","root","","bca");
$query = "select * from post";
$result = $con->query($query);
?>
   <div class="products">
<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       ?>      
   <div class="item">
    <img src="images/<?=$row["thumbnail"]?>" alt="post-img">
    <h3><a href="postdetails.php?ID=<?=$row["ID"]?>"><?=$row["heading"]?></a></h3>
    <h5><?=$row["sub_heading"]?></h5>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore aspernatur illum id consequatur dolorum odio ea. Tempora, totam omnis modi illo impedit, explicabo repellat ipsam eum cumque, quasi ipsa commodi!</p>
    <span >Published at:<?=$row["created_at"]?></span>
    <span>By:<?=$row["created_by"]?></span><br/>
    <button><a href="update.php?id=<?=$row["ID"]?>">Edit</a></button>
    <?php  $hid = $row["ID"]?>
    <button ><a href="controller.php?ID=<?=$row["ID"]?>">Delete</a></button>

</div>
<?php
        } 
    } else {
        echo "No Record Found";
    }
    ?>
    <div class="updated">
        <?php
 if(isset($_SESSION['user'])){
    // echo $_SESSION['message'];
    // $_SESSION['message']="";
    // echo  $_SESSION['updated_by'];
    // $_SESSION['updated_by']="";
    // echo $_SESSION['updated_on'];
    // $_SESSION['updated_on']="";
     
    // echo $_SESSION["user"];
   

}

?>
    </div>
    </div>
 <style>
    /* .updated{
        font-size: 20px;
        display: block;
        flex: 1 1 auto;
    } */
    body{
        font-family: Arial, Helvetica, sans-serif;
    }
    .item{
        width:350px;
        height:auto;
        background-color: #44a8b6;
        border: 1px solid black;
        margin:10px;
        padding:20px;
        border-radius: 10px;
        box-shadow: 5px 5px 20px 3px black;
    }
    button{
        margin-top:10px;
        width:100px;
        height:30px;
        font-size: 16px;
    }
    span{
        font-weight:bold;
    }
    img{
       
        width:350px;
        height:200px;
      
    }
    .products{
        border: 1px solid blue;
        display: flex;
        justify-content: center;
       
    }
</style>
