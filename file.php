<h1>Working with Files </h1>
<?php 
$file =fopen("MONGOCON.txt","r");
$line="";
if($file){
    while (($line=fgets($file))!==false) {
       echo $line;
    }
    fclose($file);
}else{
    echo "Error Opening Files";
}
?>
<div class="container">

    <br/><a href="filedelete.php">Delete FIle</a>
    <form>
        <textarea rows="20" cols="50" name="text"></textarea><br/>
        <input type="submit" name="submit" value="Write">    
    </form>
</div>

<?php
if(isset($_GET['text'])){
    $file=fopen("MONGOCON.txt","w");
    $line=$_GET['text'];
    if($file){
        fwrite($file,$line);
        fclose($file);
    }else{
        echo"Error Writing to a FIle";
    }
}


?>
 
