
<?php

$con = new mysqli("localhost","root","","bca");

if (isset($_GET["ID"])) {
    $id = $_GET["ID"];
    $query= "delete from products where ID = $id ";
    if($con->query($query) === TRUE) {
        echo "Deleted";
    } else {
        echo "Unable to Delete";
    }
}
?>