<h1>Conditional Statements</h1>
<?php
$value= 10;


echo"(If Condition)<br/>";
if($value>5){
    echo"The value is greater than 5<br/><br/>";
}



echo"(If else Condition)<br/>";
if($value>12){
    echo"The value is greater than 12 ";
}else{
    echo"The value is less than or equal to 12";
}




echo"<br/><br/>{If elseif Condition)<br/>";
if($value>1 && $value<15){
    echo"The value Lies betwen 1 and 15 ";
}elseif($value>15){
    echo"The value is greater than 15";
}else{
    echo "The value is less than 1";
}

?>