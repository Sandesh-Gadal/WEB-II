<?php
include "dbcon.php";
session_start();
$con = db_connect();


?>
<style>
.back-button{
    display: inline-block;
    padding: 2px 7px;
    margin-left: 10px;
    text-decoration: none;
    color: #fff;
    background-color: #007bff;
    border: 1px solid #007bff;
    border-radius: 5px;
    transition: background-color 0.3s, border-color 0.3s;
}

.back-button{
    float:left;
    background-color: #0056b3;
    border-color: #0056b3;
}
</style>
    <link rel="stylesheet" href="styles.css">
 

        <div><h1>Article Form</h1></div>
    <div class="form-container">
        <form   method="POST" enctype="multipart/form-data">
            <label for="title">Title</label>
        <input type="text" id="title" name="title" required>
    <label for="subtitle">Subtitle</label>
<input type="text" id="subtitle" name="subtitle" required>
                <label for="content">Content</label>
            <textarea id="content" name="content" rows="10" required></textarea>
            <label for="category">Category:</label>
            <select id="category" name="category" required>
            <option value="science">Science</option>
            <option value="technology">Technology</option>
            <option value="health">Health</option>
            <option value="business">Business</option>
            <option value="lifestyle">Lifestyle</option>
            <option value="other">Other</option>
        </select><br/>
        <label for="image">Image:</label>
        <input type="file" name="file_name">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" required>
            <button type="submit">Submit</button>
        </div>
    </form>
</div>
<a href="index.php" class="back-button">Back</a>


<?php
if(isset($_POST["title"])){
    $filefolder = "uploads/";
    $filename= $_FILES['file_name']['name'];
    $templocation = $_FILES['file_name']['tmp_name'];
    $uploadlocation = $filefolder.$filename;

  if(file_exists($uploadlocation)){
     echo "File Already exists <br/>";
  }
    else {
     move_uploaded_file($templocation,$uploadlocation);
   
 } 


 $title =$_POST['title'];
 $subtitle =$_POST['subtitle'];
 $content =$_POST['content'];
 $category =$_POST['category'];
 $author =$_POST['author'];

$query= "INSERT INTO `articles` ( `title`, `subtitle`, `content`, `category`, `image_path`, `author`) VALUES ('$title', '$subtitle', '$content', '$category', '$filename', '$author') ";

if($con->query($query)){
    header("location:index.php");
}
}

?>
