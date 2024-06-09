<?php
include "dbcon.php";

function delarticle(){
    $con= db_connect();
    
if (isset($_GET["id"])) {
    $id = $_GET["id"];
$query= "delete from articles where id = $id ";
if($con->query($query) === TRUE) {
    echo "Deleted";
header("location:create_article.php");
} else {
    echo "Unable to Delete";
}
}
}
?>