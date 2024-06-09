<h1>Global Variable</h1>

<?php
$global = "global";


function local(){
    $global = "local";
    echo "The global is change to $global <br/>";
}
function local1(){
    $global = "local1";
    echo "The global is change to $global";
}

echo local();
echo local1();


?>