<?php

$con = new mysqli("localhost","root","","bca");
?>

<form method="POST">
   Note Title : <input type="text" name="note_title">
   Subject Name : <input type="text" name="subject_name">
   Subject Category : <input type="text" name="subject_category">
   File name : <input type="text" name="file_name">
   Description : <textarea name="description" rows="10" cols="50"></textarea>
   Status : <input type="text" name="status" id="status">
   <input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST["note_title"])){
$note_title = $_POST["note_title"];
$subject_name = $_POST["subject_name"];
$subject_category = $_POST["subject_category"];
$file = $_POST["file_name"];
$desp = $_POST["description"];
$status = $_POST["status"];

$query = "INSERT INTO `notes` ( `note_title`, `subject_name`, `subject_category`, `file_name`, `description`, `status`) VALUES ( '$note_title', '$subject_name', '$subject_category', '$file', '$desp', '$status')";
;
$con->query($query);
}
?>
<style>
input,textarea{
    display: block;
}
</style>