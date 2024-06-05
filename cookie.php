<h1>Example Of Cookie</h1>
<?php
// setting cookie 
setcookie("name","Sandesh");
setcookie("favcolor","Black");
$cookietime = time()+60*24*14;
// To set the cookie with time interval
setcookie("cookiename","value",time()+100);
setcookie("token","1221324",$cookietime);

// method to remove cookie (we need to decrese the current time by 1 sec)
setcookie("token","",time()-1);
if(isset($_COOKIE['name'])){
    $name = $_COOKIE['name'];
    $favcolor = $_COOKIE['favcolor'];
    echo "Name: $name <br/>";
    echo "Your Favourite Color is : $favcolor ";
}

?>