<?php
$con = new mysqli("localhost","root","","bca");
if(isset($_GET["ID"])){

$query = "Select * from post where ID =$id";
$result= $con->query($query);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        ?>
            <div class="container">
                <form >
                    <h3>Edit Post</h3>
                    <label for="heading">Heading:</label> <input type="text" name="heading" value="<?=$row["heading"]?>">
                    Sub_heading: <input type="text" name="subheading" value="<?=$row["sub_heading"]?>">
                    Description: <textarea name="desp" rows="4" cols="48"><?= $row["description"]?></textarea>
                    Thumbnail: <input type="text" name="thumbnail" value="<?= $row["thumbnail"]?>">
                    <input type="submit" id="submit" value="Update ">
                </form>
            </div>
            <?php
        }
    }
}
if(isset($_GET["heading"])){
    $id = $_GET["ID"];
    $heading = $_GET["heading"];
    $subheading = $_GET["subheading"];
    $description = $_GET["desp"];
    $thumbnail = $_GET["thumbnail"];
    $updatequery = "update post heading='$heading',sub_heading='$subheading',description='$description',thumbnail='$thumbnail' where ID= $id";
    if( $con->query($updatequery)){
        echo "Post Updated";
    }else{
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