<?php
session_start();
$con = new mysqli("localhost","root","","bca");
$id = $_GET["id"];
echo "$id";
if(!$con){
    die("Hi");
}
$query = "Select * from post where ID =$id";
$result= $con->query($query);
$data=$result->fetch_assoc();
        ?>
            <div class="container">
                <form method="post" >
                    <h3>Edit Post</h3>
                    <label for="heading">Heading:</label> <input type="text" name="heading" value="<?=$data["heading"]?>">
                    Sub_heading: <input type="text" name="subheading" value="<?=$data["sub_heading"]?>">
                    Description: <textarea name="desp" rows="4" cols="48"><?= $data["description"]?></textarea>
                    Thumbnail: <input type="text" name="thumbnail" value="<?= $data["thumbnail"]?>">
                    <input type="submit" id="submit" value="Update ">
                </form>
            </div>
            <?php

if(isset($_POST["heading"])){
  
    $heading = $_POST["heading"];
    $subheading = $_POST["subheading"];
    $description = $_POST["desp"];
    $thumbnail = $_POST["thumbnail"];
    $updatequery = "update post set heading='$heading',sub_heading='$subheading',description='$description',thumbnail='$thumbnail' where ID= $id";
    // $con->query($updatequery);
    if( $con->query($updatequery)){
       $_SESSION["user"]['message']="Data Updated";
       $_SESSION["user"]['updated_by']="Sandesh";
       $_SESSION["user"]['updated_on']=date("Y-m-D");
        header("Location:post.php");
    }else{
        echo $con->error;
        echo "Failed to Update";
    }
}

        ?>
        <style>
            body{
                font-family: Helvetica , sans-serif;
                display:flex;
                justify-content: center;
                
               
            }
            input
            {
                display: block;
                width:400px;
                height:50px;
            }
            textarea{
                display: block;
            }
            #submit{
                margin-top: 10px;
            }
           
            h3{
                text-align:center;
                font-size: 30px;
            }
        </style>