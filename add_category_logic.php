<?php


include "connectionOneDatabase.php";

if ($connection->error == false){
    if(isset($_POST["Add_category"])){
        $category_name = $_POST["category_Name"];
        echo "$category_name";
    };

}

    $sql = "INSERT INTO categorie (name) VALUES('$category_name')";

    $result = $connection->query($sql);

    if($result == true){

        echo "Category Added";

    } else {

        echo "Fail";

    }



?>