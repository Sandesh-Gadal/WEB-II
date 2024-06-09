<?php
$Customer_Name = "Sandesh Gadal";
$Loan_amount = 400000;
$Interest_Amount = 55067.56;
$Is_Paid = false;

echo "Customer Details<br/>";

echo "<br/>Customer Name: $Customer_Name";
echo "<br/>Loan Amount: $Loan_amount";
echo "<br/>Total Interest: $Interest_Amount";
echo "<br/> Status:".($Is_Paid?'PAID':'NOT PAID');

?>