<?php
include "db.php";
session_start();
$delete = delete_post($_GET["ID"]);
if($delete) {
    $_SESSION['message']="Message Deleted";
    header("Location:post.php");
} else{
    $_SESSION['message']="Fail to Delete Data";
    header("Location:post.php");
}


?>