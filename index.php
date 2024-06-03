<?php 
$con = new mysqli("localhost","root","","bca");

$query = "Select * from products";
$result = $con->query($query);
?>
<table border="1">
<thead>
  <th>sn</th>
  <th> Product Name</th>
  <th> Category</th>
  <th>Price</th>
  <th>Quantity</th>
  <th>Status</th>
  <th>Actions</th>
</thead>


<?php

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
       ?>
             <tr>
                 <td><?=$row["ID"]?></td>
                 <td><?=$row["product_name"]?></td>
                 <td><?=$row["category"]?></td>
                 <td><?=$row["price"]?></td>
                 <td><?=$row["quantity"]?></td>
                <td><?=($row["status"]==0)?"Inactive":"Need REstock"?></td>
                <td><a href="view.php?ID=<?=$row["ID"]?>">View</a> &nbsp;<a href="view.php?ID=<?=$row["ID"]?>">Update</a> &nbsp; <a href="delete.php?ID=<?=$row["ID"]?>">Delete</a> </td>
            </tr>
            
            <?php
        } 
    } else {
        echo "No Record Found";
    }
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
    }
    ?>
    </tbody>
        </table>