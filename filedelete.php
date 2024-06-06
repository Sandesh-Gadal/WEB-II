<?php
$filelocation="MONGOCON.txt";
if(file_exists("MONGOCON.txt")){
    if(unlink($filelocation)){
        echo "File Deleted";
    }
}else{
    echo "File not Found";
}

?>