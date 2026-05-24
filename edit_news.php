<?php
include "connectionOneDatabase.php";

$id = $_GET["id"];

$sql = "SELECT * FROM news WHERE id=$id";
$result = $connection->query($sql);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit News</title>
</head>
<body>
    <center>
        <h1>Edit News</h1>
        <form method="POST" action="edit_news_logic.php" enctype="multipart/form-data">
     <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
     <input type="text" name="New_title" value="<?php echo $row['title']; ?>">
    <br>

    <textarea name="New_details"><?php echo $row['details']; ?></textarea>
    <br>

    <input type="number" name="New_category_id" value="<?php echo $row['category_id']; ?>">

    <br>

    <input type="number" name="New_user_id" value="<?php echo $row['user_id']; ?>">

    <br>
     <img src="images/<?php echo $row['image']; ?>" width="100">
     <br>
     <input type="file" name="New_image">
     <br>
    <input type="submit" name="Update_news" value="Update News">



</form>
    </center>
</body>
</html>