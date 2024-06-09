<?php
include "dbcon.php";
$con=db_connect();
$id1= $_GET["id"];
$query = "SELECT * FROM articles Where id=$id1";
$result = $con->query($query);
$data=$result->fetch_assoc();
?>
<link rel="stylesheet" href="styles.css">
<body>
    <div><h1>Edit Article </h1></div>
    <div class="form-container">
        <form method="POST" enctype="multipart/form-data">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="<?=$data['title']?>" required>
            <label for="subtitle">Subtitle</label>
            <input type="text" id="subtitle" name="subtitle" value="<?=$data['subtitle']?>"required>
            <label for="content">Content</label>
            <textarea id="content" name="content" rows="10" required><?=$data['content']?></textarea>
            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <option value="science" <?=$data['category'] == 'science' ? 'selected' : ''?>>Science</option>
                <option value="technology" <?=$data['category'] == 'technology' ? 'selected' : ''?>>Technology</option>
                <option value="health" <?=$data['category'] == 'health' ? 'selected' : ''?>>Health</option>
                <option value="business" <?=$data['category'] == 'business' ? 'selected' : ''?>>Business</option>
                <option value="lifestyle" <?=$data['category'] == 'lifestyle' ? 'selected' : ''?>>Lifestyle</option>
                <option value="other" <?=$data['category'] == 'other' ? 'selected' : ''?>>Other</option>
            </select><br/>
            <label for="image">Image:</label>
            <input type="file" name="file_name" readonly >
            <br/><label for="author">Author</label>
            <input type="text" id="author" name="author" value="<?=$data['author']?>" required>
            <button type="submit">Submit</button>
        </form>
    </div>
    <a href="index.php" class="back-button">Back</a>
</body>
<?php

if(isset($_POST['title'])) {
  
    $title =$_POST['title'];
    $subtitle =$_POST['subtitle'];
    $content =$_POST['content'];
    $category =$_POST['category'];
    $author =$_POST['author'];
    $query = "UPDATE articles SET title='$title', subtitle='$subtitle', content='$content', category='$category', author='$author' WHERE id='$id1'";
    if($con->query($query)) {
        echo "Article updated successfully!";
        header("location:index.php");
    } else {
        echo "Error updating article: " . $con->error;
    }
}

?>
