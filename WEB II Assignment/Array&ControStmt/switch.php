<h1>Switch statements</h1>
<?php
$temperature = 25;

switch(true){
    case ($temperature>35):
    echo "The day is so Hot";
    break;
    case ($temperature<=35 && $temperature>25):
    echo "The day is Moderate";
    break;
    case ($temperature<=25 && $temperature>15):
    echo "The day is very good";
    break;
    case ($temperature<=15 && $temperature>5):
    echo "The day is a bit cold";
    break;
    case ($temperature<=5):
    echo "The day is freezing cold";
    break;
    default:
    echo"The temperature cant be read Invalid number";
   
}
?>