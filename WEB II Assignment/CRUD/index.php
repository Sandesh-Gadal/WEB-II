<?php
include "dbcon.php";
session_start();
$con = db_connect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Article List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1{
            text-align:center;
        }
        .articles {
            display: flex;
            flex-wrap: nowrap;
            gap: 20px;
            justify-content: center;
        }
        .article-container {
            background: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .article-container img {
            max-width: 100%;
            height: 150px;
            display: block;
            margin: 0 auto;
            border-radius: 8px;
            object-fit: cover;
        }
        .article-container h2 {
            font-size:25px;
            margin-bottom: 10px;
            text-align:left;
        }
        .article-container h3 {
            font-size: 15px;
            margin-bottom: 10px;
            color: #555;
        }
        .article-container p {
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }
        .article-container .author, .article-container .category {
            font-size: 12px;
            color: #999;
        }
        .article-container .author {
            margin-top: 10px;
        }
        .button-group {
    margin-top: 10px;
    text-align: right;
}

.editbtn,
.delbtn,.create-article-button ,.back-button{
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

.editbtn:hover,
.delbtn:hover,.create-article-button ,.back-button{
    background-color: #0056b3;
    border-color: #0056b3;
}

.create-article-button{
    float:right;
}
a{
    float:left;
}
]
    </style>
</head>
<body>
<a href="create_article.php" class="create-article-button">Create Article</a>  

    <div class="header"><h1>Article List</h1>
</div>
    <div class="articles">

    <?php
    $query = "SELECT * FROM articles";
    $result = $con->query($query);

    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
    ?>
        <div class="article-container">
            <h2><?= htmlspecialchars($row['title']) ?></h2>
            <h3><?= htmlspecialchars($row['subtitle']) ?></h3>
            <?php if (!empty($row['image_path'])): ?>
                <img src="uploads/<?= htmlspecialchars($row['image_path']) ?>" alt="Article Image">
            <?php endif; ?>
            <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
            <p class="category">Category: <?= htmlspecialchars($row['category']) ?></p>
            <p class="author">Author: <?= htmlspecialchars($row['author']) ?></p>
            <div class="button-group">
        <a href="update_article.php?id=<?= $row['id'] ?>" class="editbtn">Edit</a>
        <a href="controller.php?id=<?= $row['id'] ?>" class="delbtn">Delete</a>
    </div>
        </div>
    <?php
        }
    }
    else{
        ?>
        <p>No articles found.</p>
        <?php
      }
    ?>
    </div>
</body>
</html>

