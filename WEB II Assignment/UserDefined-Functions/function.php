<h1>Functions With Arguments and Return Values </h1>
<?php
  function  RandomStringGenerator($arg){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $length=strlen($characters);
     $String="";
     for ($i=0; $i <$arg ; $i++) { 
       $String.= $characters[rand(0,$length-1)];
     }
     return $String;
     
  }
  
  echo " String:".RandomStringGenerator(10);
?>