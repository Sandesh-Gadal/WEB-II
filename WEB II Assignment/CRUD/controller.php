<?php

include "delete_article.php";
session_start();
$delete = delarticle($_GET["id"]);
if($delete) {
    $_SESSION['message']="Message Deleted";
    header("Location:index.php");
} else{
    $_SESSION['message']="Fail to Delete Data";
    header("Location:index.php");
}


?>