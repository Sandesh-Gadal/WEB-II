<h1>URL encoding</h1>
<?php

$mystring="Hello i am Sandesh Gadal.";
echo "<b>Normal:</b> $mystring <br/>";
echo "<b>After Urlencoding:</b>".urlencode($mystring)."<br/>";

$url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo "<br/><b>Encoded URL:</b>$url";
echo "<br/><b>After Using urldecode:</b>".urldecode($url);

?>