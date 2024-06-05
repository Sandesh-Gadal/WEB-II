<?php

$con = new mysqli("localhost","root","","bca");
?>

<form method="POST" enctype="multipart/form-data">
   Note Title : <input type="text" name="note_title">
   Subject Name : <input type="text" name="subject_name">
   Subject Category : <input type="text" name="subject_category">
   File name : <input type="file" name="file_name">
   Description : <textarea name="description" rows="10" cols="50"></textarea>
   Status : <input type="text" name="status" id="status">
   <input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST["note_title"])){
    $filefolder = "files/";
   $filename= $_FILES['file_name']['name'];
   $templocation = $_FILES['file_name']['tmp_name'];
   $uploadlocation = $filefolder.$filename;
   echo "File Type: " .$_FILES['file_name']['type']."<br/>";
   echo "File Size:" .$_FILES['file_name']['size']/1024 . "KB <br/>";
 if(file_exists($uploadlocation)){
    echo "File Already exists <br/>";
 }
   else {
    move_uploaded_file($templocation,$uploadlocation);
    echo "upload sucess";
} 
 
$note_title = $_POST["note_title"];
$subject_name = $_POST["subject_name"];
$subject_category = $_POST["subject_category"];
$desp = $_POST["description"];
$status = $_POST["status"];

$query = "INSERT INTO `notes` ( `note_title`, `subject_name`, `subject_category`, `file_name`, `description`, `status`) VALUES ( '$note_title', '$subject_name', '$subject_category', '$filename', '$desp', '$status')";
;
$con->query($query);
}
?>
<style>
input,textarea{
       display: block;
}
</style>