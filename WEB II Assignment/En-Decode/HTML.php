<h1>HTML encoding using htmlspecialchars and htmlentities </h1>
<?php

$UserString = "I want to add % & ; to the Special character List with >< sign ";
$HtmlCode = "<b><span>It is 2:33 <> AM now</span></b>";

$EnUserSting = htmlspecialchars($UserString,ENT_QUOTES,'UTF-8');
$EnHtmlcode = htmlentities($HtmlCode,ENT_QUOTES,'UTF-8');


echo "Normal UserString :". $UserString."<br/>";
echo "Normal Html Code  :". $HtmlCode."<br/><br/>";

echo "Normal UserString After Encoding :". $UserString."<br/>";
echo "Normal Html Code  After Encoding :". $HtmlCode."<br/><br/>";

echo "Encoded UserString decoded :".htmlspecialchars($EnUserSting,ENT_QUOTES,'UTF-8')."<br/>";
echo "Encoded Html Code decoded :". htmlentities($EnHtmlcode,ENT_QUOTES,'UTF-8')."<br/>";
?>

