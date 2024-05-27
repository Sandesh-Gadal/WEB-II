<?php
$con = new mysqli("localhost","root","","bca");

if (isset($_GET["ID"])) {
    $id = $_GET["ID"];
    $query= "select * from products where ID = $id ";
    $result = $con->query($query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["ID"] . "<br>";
            echo "Name: " . $row["product_name"] . "<br>";
            echo "Category: " . $row["category"] . "<br>";
            echo "Price: " . $row["price"] . "<br>";
            echo "Quantity: " . $row["quantity"] . "<br>";
            echo "Status: " . ($row["status"] == 0 ? "Inactive" : "Need Restock") . "<br>";
        }            
}
}
?>