<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add News</title>
</head>
<body>
    <center>
        <h1>Add News</h1>
        <form method="POST" action="add_news_logic.php" enctype="multipart/form-data">
   

    <input type="text" name="title" placeholder="News Title">
    <br>

    <textarea name="details" placeholder="News Details"></textarea>
    <br>

    <input type="number" name="category_id" placeholder="Category ID">

    <br>

    <input type="number" name="user_id" placeholder="User ID">

    <br>
     <input type="file" name="image"  placeholder="Add Image">
    <br>
    <input type="submit" name="add_news"value="Add News">



</form>
    </center>
</body>
</html>