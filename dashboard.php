<?php
session_start() ;
$name = $_SESSION["authUser"]["name"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <center>
 <h1>Hello <?php echo $name ?> in dashboard</h1>

 <a href="add_category.php">Add Category</a>

<br>

<a href="view_categories.php">View Categories</a>

<br>

<a href="add_news.php">Add News</a>

<br>

<a href="view_news.php">View All News</a>

<br>

<a href="deleted_news.php">Deleted News</a>

<br>


    </center>

</body>
</html>