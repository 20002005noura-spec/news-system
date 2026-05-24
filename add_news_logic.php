<?php

include "connectionOneDatabase.php";

if(isset($_POST["add_news"])){

    $title = $_POST["title"];
    $details = $_POST["details"];
    $category_id = $_POST["category_id"];
    $user_id = $_POST["user_id"];


    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){

        $image_name = time() . "_" . $_FILES["image"]["name"];
        $tmp_name = $_FILES["image"]["tmp_name"];


        if(!file_exists("images")){
            mkdir("images");
        }

        move_uploaded_file($tmp_name, "images/" . $image_name);

    } else {
        $image_name = "";
    }

    $sql = "INSERT INTO news(title, details, image, category_id, user_id, deleted)
            VALUES('$title', '$details', '$image_name', '$category_id', '$user_id', 0)";

    $result = $connection->query($sql);

    if($result == true){
        echo "News Added Successfully";
    } else {
        echo "Error Adding News";
    }
}

?>