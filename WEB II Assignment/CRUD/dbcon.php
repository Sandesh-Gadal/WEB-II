<?php

function db_connect(){
    
    $con = new mysqli("localhost","root","","customer_db");
  return $con;
}

?>