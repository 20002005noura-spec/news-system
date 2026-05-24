<?php

include "connectionOneDatabase.php";



$id = $_POST["id"];
$title = $_POST["New_title"];
$details = $_POST["New_details"];
$category_id = $_POST["New_category_id"];
$user_id = $_POST["New_user_id"];


$image_name = time() . "_" . $_FILES["New_image"]["name"];
$tmp_name = $_FILES["New_image"]["tmp_name"];

move_uploaded_file($tmp_name, "images/" . $image_name);


$sql = "UPDATE news SET  title='$title',details='$details', user_id='$user_id',
 image='$image_name'WHERE id=$id";

$result = $connection->query($sql);

if($result){
    header("Location: view_news.php");
    exit();
} else {
    echo "Error updating news";
}

?>